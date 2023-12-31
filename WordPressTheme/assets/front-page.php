<?php get_header(); ?>

<section class="mv">
  <div class="mv__inner">
    <div class="mv__slider js-mv-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-sp_img1.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-pc_img1.jpg" width="1440" alt="亀が泳いでいる">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-sp_img2.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-pc_img2.jpg" width="1440" alt="亀とダイバー">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-sp_img3.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-pc_img3.jpg" width="1440" alt="綺麗な海に船">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-sp_img4.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-pc_img4.jpg" width="1440" alt="キレイな砂浜と青空">
          </picture>
        </div>
      </div>
      <div class="mv__header">
        <h2 class="mv__title">DIVING</h2>
        <p class="mv__subtitle">into the ocean</p>
      </div>
    </div>
  </div>
</section>

<main>
  <!-- campaign -->
  <section id="campaign" class="campaign top-campaign-layout">
    <div class="campaign__inner inner">
      <div class="campaign__title section-header">
        <p class="section-header__sub">Campaign</p>
        <h2 class="section-header__main">キャンペーン</h2>
      </div>

      <div class="campaign__box">
        <div class="swiper campaign-cards js-campaign-swiper">
          <ul class="swiper-wrapper campaign-cards__items">
            <li class="swiper-slide campaign-cards__item">
              <div class="campaign-card">
                <div class="campaign-card__container">
                  <a href="<?php echo esc_url(home_url('/blog')); ?>" class="campaign-card__link">
                    <div>
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign_img1.jpg" alt="魚の群れ">
                    </div>
                    <div class="campaign-card__body">
                      <div class="campaign-card__mete">
                        <p class="campaign-card__tag">ライセンス講習</p>
                      </div>
                      <div class="campaign-card__body-head">
                        <h3 class="campaign-card__title">ライセンス取得</h3>
                      </div>
                      <div class="campaign-card__charge">
                        <p class="campaign-card__charge-text">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__charge-box">
                          <p class="campaign-card__charge-price-1">&yen;56,000</p>
                          <p class="campaign-card__charge-price-2">&yen;46,000</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="swiper-slide campaign-cards__item">
              <div class="campaign-card">
                <div class="campaign-card__container">
                  <a href="<?php echo esc_url(home_url('/blog')); ?>" class="campaign-card__link">
                    <div>
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign_img2.jpg" alt="船と海の風景">
                    </div>
                    <div class="campaign-card__body">
                      <div class="campaign-card__mete">
                        <p class="campaign-card__tag">体験ダイビング</p>
                      </div>
                      <div class="campaign-card__body-head">
                        <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                      </div>
                      <div class="campaign-card__charge">
                        <p class="campaign-card__charge-text">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__charge-box">
                          <p class="campaign-card__charge-price-1">&yen;24,000</p>
                          <p class="campaign-card__charge-price-2">&yen;18,000</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="swiper-slide campaign-cards__item">
              <div class="campaign-card">
                <div class="campaign-card__container">
                  <a href="<?php echo esc_url(home_url('/blog')); ?>" class="campaign-card__link">
                    <div>
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign_img3.jpg" alt="光っているクラゲ">
                    </div>
                    <div class="campaign-card__body">
                      <div class="campaign-card__mete">
                        <p class="campaign-card__tag">体験ダイビング</p>
                      </div>
                      <div class="campaign-card__body-head">
                        <h3 class="campaign-card__title">ナイトダイビング</h3>
                      </div>
                      <div class="campaign-card__charge">
                        <p class="campaign-card__charge-text">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__charge-box">
                          <p class="campaign-card__charge-price-1">&yen;10,000</p>
                          <p class="campaign-card__charge-price-2">&yen;8,000</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="swiper-slide campaign-cards__item">
              <div class="campaign-card">
                <div class="campaign-card__container">
                  <a href="<?php echo esc_url(home_url('/blog')); ?>" class="campaign-card__link">
                    <div>
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign_img4.jpg" alt="ダイビングをしている様子">
                    </div>
                    <div class="campaign-card__body">
                      <div class="campaign-card__mete">
                        <p class="campaign-card__tag">ファンダイビング</p>
                      </div>
                      <div class="campaign-card__body-head">
                        <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                      </div>
                      <div class="campaign-card__charge">
                        <p class="campaign-card__charge-text">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__charge-box">
                          <p class="campaign-card__charge-price-1">&yen;20,000</p>
                          <p class="campaign-card__charge-price-2">&yen;16,000</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="campaign__swiper-btn">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <div class="campaign__button">
      <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"><span>view&nbsp;more</span></a>
    </div>
  </section>

  <!-- about -->
  <section id="about" class="about top-about-layout">
    <div class="about__icon-image">
      <img class="u-desktop" src="<?php echo get_theme_file_uri(); ?>/images/common/sango_img.png" alt="サンゴのアイコン">
    </div>
    <div class="about__inner inner">

      <div class="about__title section-header">
        <p class="section-header__sub">About us</p>
        <h2 class="section-header__main">私たちについて</h2>
      </div>
      <div class="about__container">
        <div class="about__img-box">
          <div class="about__image-1">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/about_img1.jpg" alt="屋根の上にシーサーの置き物">
          </div>
          <div class="about__image-2">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/about_img2.jpg" alt="魚の群れ">
          </div>
        </div>
        <div class="about__body">
          <h3 class="about__sub-title">Dive into<br>
            the Ocean</h3>
          <div class="about__text-box">
            <p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <div class="about__button">
              <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"><span>view&nbsp;more</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- information -->
  <section id="information" class="information top-information-layout">
    <div class="information__inner inner">
      <div class="information__title section-header">
        <p class="section-header__sub">Information</p>
        <h2 class="section-header__main">ダイビング情報</h2>
      </div>
      <div class="information__box">
        <div class="information__image">
          <div class="js-scroll colorbox-scroll"><span class="js-motion-txt colorbox-motion-txt"><span class="js-motion-inner colorbox-motion-inner">
                <img class="background-image" src="<?php echo get_theme_file_uri(); ?>/images/common/information_img.jpg" alt="泳ぐ魚">
              </span></span>
          </div>
        </div>
        <div class="information__body">
          <h3 class="information__sub-title">ライセンス講習</h3>
          <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADI<br class="u-desktop">の「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセン<br class="u-desktop">ス取得をサポート致します。</p>
          <div class="information__button">
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"><span>view&nbsp;more</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog -->
  <section id="blog" class="blog top-blog-layout">
    <div class="blog__icon-image">
      <img class="u-desktop" src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img1.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="blog__bg u-desktop">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog-bg_img.jpg" alt="水面を撮った様子">
    </div>
    <div class="blog__inner inner">
      <div class="blog__title section-header">
        <p class="section-header__sub section-header__sub--white">Blog</p>
        <h2 class="section-header__main section-header__main--white">ブログ</h2>
      </div>
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 3
      ];
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <ul class="blog__cards blog-cards">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="blog-cards__item">
              <div class="blog-card">
                <a href="<?php the_permalink(); ?>" class="blog-card__link">
                  <div class="blog-card__box">
                    <div class="blog-card__image">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_img1.jpg" alt="珊瑚礁">
                    </div>
                    <div class="blog-card__mete">
                      <time class="blog-card__time"><?php echo get_the_date('Y.m/d'); ?></time>
                      <h3 class="blog-card__title"><?php the_title(); ?></h3>
                    </div>
                  </div>
                  <div class="blog-card__body">
                    <p class="blog-card__text"><?php the_content(); ?>
                  </div>
                </a>
              </div>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php endif; ?>

      <div class="blog__button">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"><span>view&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <!-- voice -->
  <section id="voice" class="voice top-voice-layout">
    <div class="voice__icon-image1">
      <img class="u-desktop" src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="voice__icon-image2">
      <img class="u-desktop" src="<?php echo get_theme_file_uri(); ?>/images/common/tatu_img.png" alt="イバラタツのアイコン">
    </div>
    <div class="voice__inner inner">
      <div class="voice__title section-header">
        <p class="section-header__sub">Voice</p>
        <h2 class="section-header__main">お客様の声</h2>
      </div>
      <ul class="voice__cards voice-cards">
        <li class="voice-cards__item voice-card">
          <a href="<?php echo esc_url(home_url('/blog')); ?>" class="voice-card__link">
            <div class="voice-card__box">
              <div class="voice-card__item">
                <div class="voice-card__mete">
                  <p class="voice-card__category">20代(女性)</p>
                  <p class="voice-card__tag">ライセンス講習</p>
                </div>
                <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
              </div>
              <div class="voice-card__image">
                <div class="js-scroll colorbox-scroll"><span class="js-motion-txt colorbox-motion-txt"><span class="js-motion-inner colorbox-motion-inner">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice_img1.jpg" alt="帽子を被った女性">
                    </span></span></div>
              </div>
            </div>
            <div class="voice-card__body">
              <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。</p>
            </div>
          </a>
        </li>
        <li class="voice-cards__item voice-card">
          <a href="<?php echo esc_url(home_url('/blog')); ?>" class="voice-card__link">
            <div class="voice-card__box">
              <div class="voice-card__item">
                <div class="voice-card__mete">
                  <p class="voice-card__category">20代(男性)</p>
                  <p class="voice-card__tag">ファンダイビング</p>
                </div>
                <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
              </div>
              <div class="voice-card__image">
                <div class="js-scroll colorbox-scroll"><span class="js-motion-txt colorbox-motion-txt"><span class="js-motion-inner colorbox-motion-inner">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice_img2.jpg" alt="笑顔の男性">
                    </span></span></div>
              </div>
            </div>
            <div class="voice-card__body">
              <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。</p>
            </div>
          </a>
        </li>
      </ul>
      <div class="voice__button">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"><span>view&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <!-- price -->
  <section id="price" class="price top-price-layout">
    <div class="price__icon-image">
      <img class="u-desktop" src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img3.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="price__inner inner">
      <div class="price__title section-header">
        <p class="section-header__sub">Price</p>
        <h2 class="section-header__main">料金一覧</h2>
      </div>
      <div class="price__list-box">
        <div class="price__list-image">
          <div class="js-scroll colorbox-scroll"><span class="js-motion-txt colorbox-motion-txt"><span class="js-motion-inner colorbox-motion-inner">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/price-pc_img.jpg" media="(min-width: 768px)">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/price-sp_img.jpg" alt="海の中で泳ぐウミガメ">
                </picture>
              </span></span>
          </div>
        </div>
        <div class="price__list-body">
          <h3 class="price__sub-title">ライセンス講習</h3>
          <dl class="price__list-item">
            <dt class="price__list-menu">オープンウォーターダイバーコース</dt>
            <dd class="price__list-money">&yen;50,000</dd>
            <dt class="price__list-menu">アドバンスドオープンウォーターコース</dt>
            <dd class="price__list-money">&yen;60,000</dd>
            <dt class="price__list-menu">レスキュー＋EFRコース</dt>
            <dd class="price__list-money">&yen;70,000</dd>
          </dl>
          <h3 class="price__sub-title">体験ダイビング</h3>
          <dl class="price__list-item">
            <dt class="price__list-menu">ビーチ体験ダイビング(半日)</dt>
            <dd class="price__list-money">&yen;7,000</dd>
            <dt class="price__list-menu">ビーチ体験ダイビング(1日)</dt>
            <dd class="price__list-money">&yen;14,000</dd>
            <dt class="price__list-menu">ボート体験ダイビング(半日)</dt>
            <dd class="price__list-money">&yen;10,000</dd>
            <dt class="price__list-menu">ボート体験ダイビング(1日)</dt>
            <dd class="price__list-money">&yen;18,000</dd>
          </dl>
          <h3 class="price__sub-title">ファンダイビング</h3>
          <dl class="price__list-item">
            <dt class="price__list-menu">ビーチダイビング(2ダイブ)</dt>
            <dd class="price__list-money">&yen;10,000</dd>
            <dt class="price__list-menu">ボートダイビング(2ダイブ)</dt>
            <dd class="price__list-money">&yen;18,000</dd>
            <dt class="price__list-menu">スペシャルダイビング(2ダイブ)</dt>
            <dd class="price__list-money">&yen;24,000</dd>
            <dt class="price__list-menu">ナイトダイビング(1ダイブ)</dt>
            <dd class="price__list-money">&yen;10,000</dd>
          </dl>
          <h3 class="price__sub-title">スペシャルダイビング</h3>
          <dl class="price__list-item">
            <dt class="price__list-menu">貸切ダイビング(2ダイブ)</dt>
            <dd class="price__list-money">&yen;24,000</dd>
            <dt class="price__list-menu">1日ダイビング(3ダイブ)</dt>
            <dd class="price__list-money">&yen;32,000</dd>
          </dl>
        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"><span>view&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>