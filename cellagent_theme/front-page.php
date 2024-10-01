<?php 
$home = esc_html(home_url('/'));
$dummy = esc_html(home_url('/dummy/'));
$contact = esc_html(home_url('/contact/'));
$reservation = esc_html(home_url('/reservation/'));
?>


<?php get_header(); ?>

    <main>

        <div class="l-fv">
            <div class="p-fv">
                <div class="p-fv__inner l-inner">
                    <div class="p-fv__texts">
                        <h1>開業医の皆様の右腕に。クリニック専門事務長代行</h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fv_text.png" alt="開業医の皆様の右腕に。クリニック専門事務長代行">
                        <div class="p-fv__priceBanner">
                            <p class="p-fv__price"><span>月額</span><strong>95,000</strong><span>円〜<small>(税抜)</small></span></p>
                        </div>
                        <p class="p-fv__comment">※ミニマムプランの場合</p>
                    </div>
                    <!-- <div class="p-fv__image"> -->
                        <picture class="p-fv__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fv_illust.png" alt="開業医の皆様の右腕に。クリニック専門事務長代行のファーストビュー画像"/>
                        </picture>
                    <!-- </div> -->
                    <div class="p-fv__btn u-mobile">
                        <a href="<?php echo $contact; ?>" class="c-btn c-btn--blue"><span>資料請求はこちら</span></a>
                        <a href="<?php echo $reservation; ?>" class="c-btn c-btn--orange"><span>無料相談会を予約する</span></a>
                    </div>
                </div>
                <!-- </div> -->
            </div>
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

        <section class="l-problem">
            <div class="p-problem">
                <div class="p-problem__inner l-inner">
                    <div class="p-problem__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub">problem</p>
                            <h2 class="c-title__main c-title__main--border">このような<span>お困り事</span>は<br class="u-mobile">ありませんか？</h2>
                        </hgroup>
                    </div>
                    <div class="p-problem__texts">
                        <div class="p-problem__textBox1">
                            <p class="p-problem__text">事務作業が多くて回らない</p>
                            <p class="p-problem__text">採用がうまく回っていない</p>
                            <p class="p-problem__text">なんでも相談屋がほしい</p>
                        </div>
                        <div class="p-problem__textBox2">
                            <p class="p-problem__text">経営や自己研磨の時間が<br class="u-mobile"> 取れない</p>
                            <p class="p-problem__text">事務長がほしいけど、<br class="u-mobile">常勤はいらない</p>
                            <p class="p-problem__text">事務の効率化を図りたい</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="l-service">
            <div class="p-service">
                <div class="p-service__inner l-inner">
                    <div class="p-service__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub c-title__sub--lightBlue">service</p>
                            <h2 class="c-title__main"><span>ハイレベルな専門チーム</span>が<br class="u-mobile">貴院をサポートします。</h2>
                        </hgroup>
                    </div>
                    <div class="p-service__wrap">
                        <div class="p-service__content">
                            <p class="p-service__text">医院毎にチームを構成し、<br class="u-mobile">全面的なサポートを。</p>
                            <div class="p-service__boxes">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img_pc.png" media="(min-width:900px)" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/service_img_sp.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="l-merit">
            <div class="p-merit">
                <div class="p-merit__inner l-inner">
                    <div class="p-merit__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub">merit</p>
                            <h2 class="c-title__main"><span>レンタル事務長さん</span>の<br class="u-mobile">３つのメリット</h2>
                        </hgroup>
                        <p class="p-merit__text">レンタル事務長さん導入で、<br class="u-mobile">経営と診療のみに集中できる<br class="u-mobile">環境の構築が可能</p>
                    </div>
                    <div class="p-merit__cards">
                        <div class="p-merit__card">
                            <p class="merit__number">01</p>
                            <h3 class="p-merit__cardTitle"><em><span>管理業務を手放す</span>ことで<br>経営と診療に集中</em></h3>
                            <div class="p-merit__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/merit1.jpg" alt="管理業務を手放すことで経営と診療に集中の画像"></div>
                            <p class="p-merit__description">人事・採用から細かな事務作業<br>集患対策など、あらゆる業務を<br>プロに相談が可能です</p>
                        </div>
                        <div class="p-merit__card">
                            <p class="merit__number">02</p>
                            <h3 class="p-merit__cardTitle"><em><span>雇用リスク・<br>教育コストなしで</span><br>事務長機能を持てる</em></h3>
                            <div class="p-merit__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/merit2.jpg" alt="雇用リスク・教育コストなしで事務長機能を持てるの画像"></div>
                            <p class="p-merit__description">雇用するより安く、教育もいらない。<br>思い立ったらすぐ<br>開始が可能です。</p>
                        </div>
                        <div class="p-merit__card">
                            <p class="merit__number">03</p>
                            <h3 class="p-merit__cardTitle"><em><span>集患や人事・採用業務</span>も<br>数多くご相談頂いております</em></h3>
                            <div class="p-merit__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/merit3.jpg" alt="集患や人事・採用業務も数多くご相談頂いておりますの画像"></div>
                            <p class="p-merit__description">元サイバーエージェントメンバーによる<br>集患施策や、大手上場企業出身の<br>人事が貴院を支援</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="l-cta">
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
        </div>

        <section class="l-whatWeDo">
            <div class="p-whatWeDo">
                <div class="p-whatWeDo__inner l-inner">
                    <div class="p-whatWeDo__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub">what we do</p>
                            <h2 class="c-title__main"><span>レンタル事務長さん</span>が<br class="u-mobile">できること</h2>
                        </hgroup>
                    </div>
                    <div class="p-whatWeDo__items">
                        <div class="p-whatWeDo__item p-whatWeDo__item--1">
                            <h3 class="p-whatWeDo__itemTitle p-whatWeDo__itemTitle--1"><span>総務・経理</span></h3>
                            <div class="p-whatWeDo__textBox">
                                <p class="p-whatWeDo__text">リサーチ</p>
                                <p class="p-whatWeDo__text">外部対応</p>
                                <p class="p-whatWeDo__text">勤怠管理</p>
                                <p class="p-whatWeDo__text">請求書管理</p>
                                <p class="p-whatWeDo__text">振込代行</p>
                                <p class="p-whatWeDo__text">経理清算</p>
                            </div>
                        </div>
                        <div class="p-whatWeDo__item p-whatWeDo__item--2">
                            <h3 class="p-whatWeDo__itemTitle p-whatWeDo__itemTitle--2"><span>人事・採用</span></h3>
                            <div class="p-whatWeDo__textBox">
                                <p class="p-whatWeDo__text">求人作成</p>
                                <p class="p-whatWeDo__text">採用管理</p>
                                <p class="p-whatWeDo__text">連絡対応</p>
                                <p class="p-whatWeDo__text">日程調整</p>
                                <p class="p-whatWeDo__text">従業員窓口</p>
                                <p class="p-whatWeDo__text">契約書作成</p>
                            </div>
                        </div>
                        <div class="p-whatWeDo__item p-whatWeDo__item--3">
                            <h3 class="p-whatWeDo__itemTitle p-whatWeDo__itemTitle--3"><span>SNS・デザイン</span></h3>
                            <div class="p-whatWeDo__textBox">
                                <p class="p-whatWeDo__text">院内POP</p>
                                <p class="p-whatWeDo__text">チラシ</p>
                                <p class="p-whatWeDo__text">リーフレット</p>
                                <p class="p-whatWeDo__text">ポスター</p>
                                <p class="p-whatWeDo__text">SNS素材</p>
                                <p class="p-whatWeDo__text">SNS投稿</p>
                            </div>
                        </div>
                        <div class="p-whatWeDo__item p-whatWeDo__item--4">
                            <h3 class="p-whatWeDo__itemTitle p-whatWeDo__itemTitle--4"><span>集客・PR</span></h3>
                            <div class="p-whatWeDo__textBox">
                                <p class="p-whatWeDo__text">リスティング</p>
                                <p class="p-whatWeDo__text">SEO</p>
                                <p class="p-whatWeDo__text">MEO</p>
                                <p class="p-whatWeDo__text">ポスティング</p>
                                <p class="p-whatWeDo__text">ビラ配り</p>
                                <p class="p-whatWeDo__text">HP運用</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="l-improvement">
            <div class="p-improvement">
                <div class="p-improvement__inner l-inner">
                    <div class="p-improvement__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub c-title__sub--lightBlue">business <br class="u-mobile">improvement</p>
                            <h2 class="c-title__main"><span>レンタル事務長さん</span><br class="u-mobile">による業務改善</h2>
                        </hgroup>
                        <p class="p-improvement__text">あらゆる業務のアウトソーシングで<br class="u-mobile">開業医様の負担を1/5へ</p>
                    </div>
                    <div class="p-improvement__wrap">
                        <div class="p-improvement__wrapper">
                            <div class="p-improvement__head">
                                <div class="p-improvement__logoBox">
                                    <div class="p-improvement__logo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="クリニック専門事務長代行レンタル事務長さんのロゴ画像">
                                    </div>
                                    <p class="p-improvement__logoText">なら...</p>
                                </div>
                                <p class="p-improvement__headText"><span>追加の雇用コスト・リスクなし</span> で<br>実現が可能</p>
                            </div>
                            <div class="p-improvement__imageBox">
                                <picture class="p-improvement__image">
                                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/improvement.png"/>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/improvement-sp.png" alt="導入後は開業医様・事務長様の業務負担を5分の1に！の画像"/>
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="l-example">
            <div class="p-example">
                <div class="p-example__inner l-inner">
                    <div class="p-example__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub c-title__sub--lightBlue">example</p>
                            <h2 class="c-title__main">活用事例</h2>
                        </hgroup>
                        <p class="p-example__text u-desktop">〜スタンダードプラン（25時間/1,500分）<br class="u-mobile">プランの内訳例〜</p>
                        <p class="p-example__text u-mobile">スタンダードプラン<br>（25時間/1,500分）<br class="u-mobile">プランの内訳例</p>
                    </div>
                    <div class="p-example__items">
                        <div class="p-example__item">
                            <h3 class="p-example__itemTitle">バックオフィス全般サポート<br class="u-mobile">での活用イメージ</h3>
                            <picture class="p-example__image">
                                <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/example1.png"/>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/example1-sp.png" alt="バックオフィス全般サポートでの活用イメージの円グラフ画像"/>
                            </picture>
                        </div>
                        <div class="p-example__item">
                            <h3 class="p-example__itemTitle p-example__itemTitle--darkBlue">集患施策及び採用活動メイン<br class="u-mobile">での活用イメージ</h3>
                            <picture class="p-example__image">
                                <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/example2.png"/>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/example2-sp.png" alt="集患施策及び採用活動メインでの活用イメージの円グラフ画像"/>
                            </picture>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="l-introduction">
            <div class="p-introduction">
                <div class="p-introduction__inner l-inner">
                    <div class="p-introduction__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub">introduction</p>
                            <h2 class="c-title__main">導入事例</h2>
                        </hgroup>
                    </div>
                    <?php
                        $args = array( 'post_type' => 'works' ); 
                        $the_query = new WP_Query($args); if($the_query->have_posts()):
                    ?>
                    <div class="p-introduction__cards js-introduction-slider">
                    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <div class="p-introduction__card">
                            <div class="p-introduction__cardImage">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/introduction_noimage.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            </div>
                            <div class="p-introduction__cardInner">
                                <div class="p-introduction__cardHead">
                                    <h3><?php the_title(); ?></h3>
                                    <p>（<?php echo get_field('address'); ?>・従業員数<?php echo get_field('number'); ?>名）</p>
                                </div>
                                <div class="p-introduction__cardContent">
                                    <div class="p-introduction__cardProblems">
                                        <p>お悩み</p>
                                        <?php if(have_rows('nayami')): ?>
                                        <ul>
                                            <?php while(have_rows('nayami')): the_row(); ?>
                                            <li>●<?php echo get_sub_field('onayami_txt'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-introduction__cardSolutions">
                                        <p>解  決</p>
                                        <?php if(have_rows('resolve')): ?>
                                        <ul>
                                            <?php while(have_rows('resolve')): the_row(); ?>
                                            <li>●<?php echo get_sub_field('resolve_txt'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    </div>
                    <?php else: ?>
                        <p class="c-noneText">現在記事公開準備中です。</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="l-price" id="price">
            <div class="p-price">
                <div class="p-price__inner l-inner">
                    <div class="p-price__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub">price</p>
                            <h2 class="c-title__main">料金プラン</h2>
                        </hgroup>
                        <p class="p-price__text">事務員や事務長を採用するより圧倒的なコスパで<br class="u-mobile">開業医様の右腕役を担います。</p>
                    </div>
                    <div class="p-price__table u-mobile">
                        <table>
                            <thead>
                                <tr>
                                    <th><span>ミニマムプラン</span></th>
                                </tr>
                            </thead>
                            <tbody class="--1">
                                <tr>
                                    <th><span>稼働時間</span></th>
                                    <td>12.5時間</td>
                                    <th><span>業務内容</span></th>
                                    <td>
                                        <p>総　務</p>
                                        <p>経　理</p>
                                        <p>人事/採用</p>
                                        <p>SNS/デザイン</p>
                                    </td>
                                    <th><span>月額料金</span></th>
                                    <td>95,000円<br><span>104,500円<small>（税込）</small></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><span>スタンダードプラン</span></th>
                                </tr>
                            </thead>
                            <tbody class="--2">
                                <tr>
                                    <th><span>稼働時間</span></th>
                                    <td>25時間</td>
                                    <th><span>業務内容</span></th>
                                    <td>
                                        <p>総　務</p>
                                        <p>経　理</p>
                                        <p>人事/採用</p>
                                        <p>SNS/デザイン</p>
                                    </td>
                                    <th><span>月額料金</span></th>
                                    <td>150,000円<br><span>165,000円<small>（税込）</small></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><span>経営参謀プラン</span></th>
                                </tr>
                            </thead>
                            <tbody class="--3">
                                <tr>
                                    <th><span>稼働時間</span></th>
                                    <td>25時間</td>
                                    <th><span>業務内容</span></th>
                                    <td>
                                        <p>総　務</p>
                                        <p>経　理</p>
                                        <p>人事/採用</p>
                                        <p>SNS/デザイン</p>
                                        <p>集患PR</p>
                                        <p>経営課題</p>
                                    </td>
                                    <th><span>月額料金</span></th>
                                    <td>255,000円<br><span>280,500円<small>（税込）</small></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-price__table u-desktop">
                        <table>
                            <thead>
                                <tr>
                                    <td class="u-desktop"></td>
                                    <th><span>ミニマムプラン</span></th>
                                    <th><span>スタンダードプラン</span></th>
                                    <th><span>経営参謀プラン</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><span>稼働時間</span></th>
                                    <td>12.5時間</td>
                                    <td>25時間</td>
                                    <td>25時間</td>
                                </tr>
                                <tr>
                                    <th><span>業務内容</span></th>
                                    <td>
                                        <p>総　務</p>
                                        <p>経　理</p>
                                        <p>人事/採用</p>
                                        <p>SNS/デザイン</p>
                                    </td>
                                    <td>
                                        <p>総　務</p>
                                        <p>経　理</p>
                                        <p>人事/採用</p>
                                        <p>SNS/デザイン</p>
                                    </td>
                                    <td>
                                        <p>総　務</p>
                                        <p>経　理</p>
                                        <p>人事/採用</p>
                                        <p>SNS/デザイン</p>
                                        <p>集患PR</p>
                                        <p>経営課題</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span>月額料金</span></th>
                                    <td>95,000円<br><span>104,500円<small>（税込）</small></span></td>
                                    <td>150,000円<br><span>165,000円<small>（税込）</small></span></td>
                                    <td>255,000円<br><span>280,500円<small>（税込）</small></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-price__tableText">
                        <p>※初期費用として一律15万円（税抜）が発生致します。</p>
                        <p>※スタンダードプランは月1回訪問が可能となります。</p>
                        <p>※経営参謀プランは月2回訪問が可能となります。</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="l-faq" id="faq">
            <div class="p-faq">
                <div class="p-faq__inner l-inner">
                    <div class="p-faq__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub c-title__sub--blue">faq</p>
                            <h2 class="c-title__main c-title__main--border c-title__main--blue">よくある質問</h2>
                        </hgroup>
                    </div>
                    <div class="p-faq__content faq-items">
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>レンタル事務長さんには何を依頼できますか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>クリニック運営で発生する<em>”医療行為以外”の全ての業務</em>の依頼が可能です。</span></p></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>月額料金が上がることはありますか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>依頼業務がプラン毎の時間内であれば、費用が上がることはございません。</span></p></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>初期導入費用はどのくらいかかりますか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>初期費用として一律15万円（税抜）が発生致します。<br>ご相談も無料で受け付けておりますので、お気軽にお問い合わせ下さいませ。</span></p></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>どのような方が業務代行をするのですか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>医療機関のバックオフィスに精通したプロフェッショナルと、デザイナー、人事など各分野のプロフェッショナルが対応させていただきます。</span></p></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>依頼や連絡はどのようにすればいいですか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>医院様のご要望に合わせ、メール、電話、チャットツール、オンラインMTGなど様々な方法でのご依頼に対応しております。</span></p></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>いつでも依頼できるのですか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>営業時間内でございましたら、いつでも受け付けております。営業時間外に関しても対応可能な場合がございますので、ご相談下さいませ。<br>
                                    ※営業時間 9:00～18:00（月～金、土日祝除）</span></p></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>どのくらいの期間でサービスの導入が可能でしょうか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>ご依頼いただく内容によっても変動はございますが、ご依頼から代行開始まで最短1週間で導入が可能です。詳細をご希望の方は、下記よりお問い合わせ下さい。</span></p></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>小規模なクリニックでもご対応いただけますか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>可能でございます。医療法人等のグループから、10名以下のクリニック様までご支援させて頂いております。幅広い業務内容にワンストップで対応が可能でございますので、お気軽にご相談下さいませ。</span></p></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>会計ソフトや勤怠管理などのITツール（DX化）の導入支援の依頼は可能でしょうか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>可能でございます。医院様の課題解決に適した最適なITツールのご提案から導入のサポートまでご対応致します。</span></p></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-faq__item faq-item">
                            <h2 class="p-faq__itemTitle js-nav-open"><span>マニュアルがない業務を依頼できますか？</span></h2>
                            <nav>
                                <ul>
                                    <li class="p-faq__text"><p><span>ご依頼いただけますので、お気軽にご相談くださいませ。</span></p></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('./template-part/cta'); ?>

    </main>

<?php get_footer(); ?>