<?php 
$home = esc_html(home_url('/'));
$dummy = esc_html(home_url('/dummy/'));
$contact = esc_html(home_url('/contact/'));
$reservation = esc_html(home_url('/reservation/'));
?>

<section class="l-cta l-cta--bottom">
    <div class="p-cta">
        <div class="p-cta__inner l-inner">
            <div class="p-cta__wrap">
                <div class="p-cta__left">
                    <div class="p-cta__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/cta.png" alt="クリニック専門事務長代行レンタル事務長さんのロゴ画像"/>
                    </div>
                    <p class="p-cta__logoText">について詳しく知りたい方はこちら</p>
                    <p class="p-cta__btnText u-mobile">「レンタル事務長さん」で<br class="u-mobile">＼ <span>診療外業務を1/5</span>に！ ／</p>
                    <p class="p-cta__btnText u-desktop">＼「レンタル事務長さん」で<span>診療外業務を1/5</span>に！ ／</p>
                    <div class="p-cta__c-btn">
                        <a href="<?php echo $contact; ?>" class="c-btn c-btn--lg-blue c-btn--cta"><span>資料請求はこちら</span></a>
                    </div>
                </div>
                <div class="p-cta__right">
                    <div class="p-cta__c-btn">
                        <a href="<?php echo $reservation; ?>" class="c-btn c-btn--lg-orange c-btn--cta"><span>無料相談会を予約する</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>