<?php 
$home = esc_html(home_url('/'));
$dummy = esc_html(home_url('/dummy/'));
$contact = esc_html(home_url('/contact/'));
$reservation = esc_html(home_url('/reservation/'));
?>

<?php get_header(); ?>

    <main>
        <div class="p-breadcrumb l-breadcrumb">
            <div class="p-breadcrumb__inner l-inner">
                <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo $home; ?>">
                            <span itemprop="name">ホーム</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name"><?php the_title(); ?></span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </div>
        <section class="p-subMv l-subMv">
            <div class="p-subMv__inner l-inner">
                <h1 class="p-subMv__title"><?php the_title(); ?></h1>
            </div>
        </section>

        <section class="l-section p-contact c-underBg">
            <div class="p-contact__inner l-inner">
                <h2 class="p-contact__title c-borderTitle">入力フォーム</h2>
                <div class="p-contact__body">
                    <?php echo do_shortcode('[contact-form-7 id="1d69793" title="お問い合わせ"]'); ?>
                    <div class="p-form__note">
                        ※いただいた内容をもとに担当よりメールやお電話にてご連絡させていただきます。<br>
                        ※競業・それに近い業種の方はご遠慮ください。<br>
                        ※恐れ入りますが、フォームがエラーなどで送信できない場合、info@cellagent.jpまでメールにてご連絡をお願いいたします。
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/cta'); ?>
    </main>

<?php get_footer(); ?>