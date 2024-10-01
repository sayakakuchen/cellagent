<?php 
$home = esc_html(home_url('/'));
$dummy = esc_html(home_url('/dummy/'));
$contact = esc_html(home_url('/contact/'));
$reservation = esc_html(home_url('/reservation/'));
$price = esc_html(home_url('/price/'));
$about = esc_html(home_url('/about/'));
$blog = esc_html(home_url('/blog/'));
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
</head>

<body>

    <header class="l-header">
        <div class="p-header">
            <div class="p-header__inner">
                <h2 class="p-header__logo">
                    <a href="<?php echo $home; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="クリニック専門事務長代行レンタル事務長さんのロゴ画像">
                    </a>
                </h2>
                <div class="p-header__hamburger">
                    <button class="c-hamburger js-hamburger" type="button" aria-controls="drawer" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="p-header__drawer">
                    <div class="p-drawer">
                        <div class="p-drawer__inner">
                            <div class="p-drawer__globalNav">
                                <nav class="p-globalNav">
                                    <ul class="p-globalNav__links p-globalNav__links--flex">
                                        <li class="p-globalNav__link"><a href="<?php echo $about; ?>">レンタル事務長さんとは</a></li>
                                        <li class="p-globalNav__link"><a href="<?php echo $price; ?>">料金プラン</a></li>
                                        <li class="p-globalNav__link"><a href="<?php echo $home; ?>#faq">よくある質問</a></li>
                                        <li class="p-globalNav__link"><a href="<?php echo $blog; ?>">コラム・お役立ち情報</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="l-buttonArea">
                                <div class="p-buttonArea">
                                    <div class="p-buttonArea__inner l-inner">
                                        <div class="p-buttonArea__items">
                                            <div class="p-buttonArea__item">
                                                <div class="p-buttonArea__c-btn">
                                                    <a href="<?php echo $contact; ?>" class="c-btn c-btn--lg-blue"><span>資料請求はこちら</span></a>
                                                </div>
                                            </div>
                                            <div class="p-buttonArea__item">
                                                <p class="p-buttonArea__text">＼ 30秒で入力完了 ／</p>
                                                <div class="p-buttonArea__c-btn">
                                                    <a href="<?php echo $reservation; ?>" class="c-btn c-btn--lg-orange"><span>無料相談会を予約する</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-header__globalNav">
                    <nav class="p-globalNav">
                        <ul class="p-globalNav__links">
                            <li class="p-globalNav__link"><a href="<?php echo $about; ?>">レンタル事務長さんとは</a></li>
                            <li class="p-globalNav__link"><a href="<?php echo $price; ?>">料金プラン</a></li>
                            <li class="p-globalNav__link"><a href="<?php echo $home; ?>#faq">よくある質問</a></li>
                            <li class="p-globalNav__link"><a href="<?php echo $blog; ?>">コラム・お役立ち情報</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="p-header__btn">
                    <a href="<?php echo $contact; ?>" class="c-btn c-btn--sm-blue"><span>資料請求はこちら</span></a>
                    <a href="<?php echo $reservation; ?>" class="c-btn c-btn--sm-orange"><span>無料相談会を予約する</span></a>
                </div>
            </div>
        </div>
    </header>