<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__information">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Information</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <section class="page-information page-information-layout">
    <div class="page-information__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-information__inner inner">
      <div class="page-information-tab">
        <div class="information-tab">
          <ul class="information-tab__menu">
            <li class="information-tab__menu-item js-tab-menu is-show" data-number="tab01">
              <div class="information-tab__icon"><img src="<?php echo get_theme_file_uri(); ?>/images/common/information-tab-icon1.svg" alt="クジラの画像"></div>
              <p>ライセンス<br class="u-mobile">講習</p>
            </li>
            <li class="information-tab__menu-item js-tab-menu" data-number="tab02">
              <div class="information-tab__icon"><img src="<?php echo get_theme_file_uri(); ?>/images/common/information-tab-icon2.svg" alt="サメの画像"></div>
              <p>ファン<br class="u-mobile">ダイビング</p>
            </li>
            <li class="information-tab__menu-item js-tab-menu" data-number="tab03">
              <div class="information-tab__icon"><img src="<?php echo get_theme_file_uri(); ?>/images/common/information-tab-icon3.svg" alt="魚の画像"></div>
              <p>体験<br class="u-mobile">ダイビング</p>
            </li>
          </ul>
          <ul class="information-tab__content">
            <li id="tab01" class="information-tab__content-item js-tab-content is-show">
              <div class="information-tab__body">
                <div class="information-tab__text-box">
                  <h2 class="information-tab__title">ライセンス講習</h2>
                  <p class="information-tab__text">
                    泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします&#33;スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう&#33;
                  </p>
                </div>
                <div class="information-tab__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/information-body_img1.jpg" alt="ライセンス講習を受けている人を上空から撮影している画像">
                </div>
              </div>
            </li>
            <li id="tab02" class="information-tab__content-item js-tab-content ">
              <div class="information-tab__body">
                <div class="information-tab__text-box">
                  <h2 class="information-tab__title">ファンダイビング</h2>
                  <p class="information-tab__text">
                    ブランクダイバー、ライセンスを取り立ての方も安心&#33;沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;
                  </p>
                </div>
                <div class="information-tab__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/information-body_img2.jpg" alt="2匹の魚が泳いでいる">
                </div>
              </div>
            </li>
            <li id="tab03" class="information-tab__content-item js-tab-content">
              <div class="information-tab__body">
                <div class="information-tab__text-box">
                  <h2 class="information-tab__title">体験ダイビング</h2>
                  <p class="information-tab__text">
                    ブランクダイバー、ライセンスを取り立ての方も安心&#33;沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;
                  </p>
                </div>
                <div class="information-tab__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/information-body_img3.jpg" alt="小魚達の群れ">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>