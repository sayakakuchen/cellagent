<?php 
$home = esc_html(home_url('/'));
$dummy = esc_html(home_url('/dummy/'));
$contact = esc_html(home_url('/contact/'));
$reservation = esc_html(home_url('/reservation/'));
?>

<?php get_header(); ?>
<main>
        <style>
            body {
                text-align: center;
            }

            h1 {
                font-size: 30px;
            }

            p {
                font-size: 14px;
                margin-top: 16px;
            }

            .container {
                line-height: 1.5;
                max-width: 600px;
                margin: auto;
                background: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-block: 200px 100px;
            }

            .container p:last-child {
                margin-top: 24px;
            }
        </style>
        <div class="container">
            <h1>現在準備中です</h1>
            <p>お探しのページは見つかりませんでした。</p>
            <p><a href="<?php echo $home; ?>" class="u-en" style="color:#164E9D">HOME</a></p>
        </div>
        <div class="p-fv__btn u-mobile">
            <a href="<?php echo $contact; ?>" class="c-btn c-btn--blue"><span>資料請求はこちら</span></a>
            <a href="<?php echo $reservation; ?>" class="c-btn c-btn--orange"><span>無料相談会を予約する</span></a>
        </div>
        <?php get_template_part('./template-part/cta'); ?>
    </main>
<?php get_footer(); ?>