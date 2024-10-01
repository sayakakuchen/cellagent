<?php 
$home = esc_html(home_url('/'));
$dummy = esc_html(home_url('/dummy/'));
$contact = esc_html(home_url('/contact/'));
$reservation = esc_html(home_url('/reservation/'));
$price = esc_html(home_url('/price/'));
$about = esc_html(home_url('/about/'));
$blog = esc_html(home_url('/blog/'));
?>

<footer class="l-footer">
        <div class="p-footer">
            <div class="p-footer__inner l-inner">
                <div class="p-footer__top">
                    <div class="p-footer__info">
                        <div class="p-footer__logo">
                            <a href="<?php echo $home; ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="レンタル事務長さんのロゴ画像">
                            </a>
                        </div>
                        <div class="p-footer__globalNav">
                            <nav class="p-globalNav">
                                <ul class="p-globalNav__links">
                                    <li class="p-globalNav__link p-globalNav__link--footer"><a href="<?php echo $about; ?>">レンタル事務長さんとは</a></li>
                                    <li class="p-globalNav__link p-globalNav__link--footer"><a href="<?php echo $price; ?>">料金プラン</a></li>
                                    <li class="p-globalNav__link p-globalNav__link--footer"><a href="<?php echo $home; ?>#faq">よくある質問</a></li>
                                    <li class="p-globalNav__link p-globalNav__link--footer"><a href="<?php echo $blog; ?>">コラム・お役立ち情報</a></li>
                                    <li class="p-globalNav__link p-globalNav__link--footer u-mobile"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
                                </ul>
                            </nav>
                        </div>
                </div>
                </div>
                <div class="p-footer__bottom">
                    <p class="p-footer__copy">&copy; 2024 CellAgent, inc. ALL RIGHTS RESERVED.</p>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </footer>
</body>

</html>