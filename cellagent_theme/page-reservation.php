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
                <h2 class="p-contact__title c-borderTitle"><?php the_title(); ?></h2>
                <p class="p-contact__lead">
                    無料相談会をご検討頂きありがとうございます。<br>
                    レンタル事務長さんのサービスのご説明及び貴院のお悩みのヒアリングを<br class="u-desktop">Web面談の形で実施させて頂きます。
                </p>
                <div class="p-contact__body">
                    <!-- Begin TimeRex Widget -->
                    <div id="timerex_calendar" data-url="https://timerex.net/s/info_3d42_f1ff/d0881447"></div>

                    <script id="timerex_embed" src="https://asset.timerex.net/js/embed.js"></script>

                    <script type="text/javascript">
                    TimerexCalendar();
                    </script>
                    <!-- End TimeRex Widget -->
                </div>
            </div>
        </section>

        <?php get_template_part('./template-part/cta'); ?>

    </main>

<?php get_footer(); ?>