<?php get_header(); ?>

<section class="mv">
  <div class="mv__inner">
    <div class="mv__slider js-mv-swiper">
      <div class="swiper-wrapper">
        <?php
        // ACFフィールドから値を取得
        for ($i = 1; $i <= 4; $i++) {
          $slide_img_pc = get_field('slide_img_pc_' . $i);
          $slide_img_sp = get_field('slide_img_sp_' . $i);
        ?>
          <div class="swiper-slide">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo esc_url($slide_img_sp); ?>">
              <img src="<?php echo esc_url($slide_img_pc); ?>" width="1440" alt="スライダー画像 <?php echo $i; ?>">
            </picture>
          </div>
        <?php
        }
        ?>
      </div>
      <div class="mv__header">
        <h2 class="mv__title"><?php the_field('mv_title'); ?></h2>
        <p class="mv__subtitle"><?php the_field('mv_subtitle'); ?></p>
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
            <?php
            $args = array(
              'post_type'      => 'campaign',
              'posts_per_page' => 4
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                <li class="swiper-slide campaign-cards__item">
                  <div class="campaign-card">
                    <div class="campaign-card__container">
                      <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="campaign-card__link">

                        <div>
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(array('223,334')); ?>
                          <?php else : ?>
                            <img class="img" src="<?php echo esc_url(get_theme_file_uri("/images/common/noimage.jpg")); ?>" alt="NoImage画像" />
                          <?php endif; ?>
                        </div>
                        <div class="campaign-card__body">
                          <div class="campaign-card__mete">
                            <p class="campaign-card__tag">ライセンス講習</p>
                          </div>
                          <div class="campaign-card__body-head">
                            <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                          </div>
                          <div class="campaign-card__charge">
                            <p class="campaign-card__charge-text">全部コミコミ(お一人様)</p>
                            <div class="campaign-card__charge-box">
                              <p class="campaign-card__charge-price-1">&yen;<?php the_field('campaign_price_1'); ?></p>
                              <p class="campaign-card__charge-price-2">&yen;<?php the_field('campaign_price_2'); ?></p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
            <?php
              endwhile;
              wp_reset_postdata(); // サブループの後にリセット
            else :
              echo esc_html('No campaigns found');
            endif;
            ?>
          </ul>
        </div>
      </div>

      <div class="campaign__swiper-btn">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>

    <div class="campaign__button">
      <a href="#" class="button"><span>view&nbsp;more</span></a>
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
                      <?php the_post_thumbnail('medium', array('class' => 'img')); ?>
                    </div>
                    <div class="blog-card__mete">
                      <time class="blog-card__time"><?php echo get_the_date('Y.m/d'); ?></time>
                      <h3 class="blog-card__title"><?php the_title(); ?></h3>
                    </div>
                  </div>
                  <div class="blog-card__body">
                    <p class="blog-card__text"><?php echo wp_trim_words(get_the_content(), 85, '…'); ?>
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
          <?php
          // Front Pageに表示するためのコード
          // Smart Custom Fieldsから価格情報を取得
          $front_page_price_group = SCF::get('price-group1', get_page_by_path('price')->ID);
          // テーブルの表示
          if ($front_page_price_group) :
          ?>
            <?php foreach ($front_page_price_group as $fields) : ?>
              <dl class="price__list-item">
                <dt class="price__list-menu"><?php echo $fields['price-menu1']; ?></dt>
                <dd class="price__list-money">&yen;<?php echo $fields['price-money1']; ?></dd>
              </dl>
            <?php endforeach; ?>
          <?php endif; ?>
          <h3 class="price__sub-title">体験ダイビング</h3>
          <?php
          $front_page_price_group = SCF::get('price-group2', get_page_by_path('price')->ID);
          if ($front_page_price_group) :
          ?>
            <?php foreach ($front_page_price_group as $fields) : ?>
              <dl class="price__list-item">
                <dt class="price__list-menu"><?php echo $fields['price-menu2']; ?><?php echo $fields['price-menu2-sub']; ?></dt>
                <dd class="price__list-money">&yen;<?php echo $fields['price-money2']; ?></dd>
              </dl>
            <?php endforeach; ?>
          <?php endif; ?>
          <h3 class="price__sub-title">ファンダイビング</h3>
          <?php
          $front_page_price_group = SCF::get('price-group3', get_page_by_path('price')->ID);
          if ($front_page_price_group) :
          ?>
            <?php foreach ($front_page_price_group as $fields) : ?>
              <dl class="price__list-item">
                <dt class="price__list-menu"><?php echo $fields['price-menu3']; ?><?php echo $fields['price-menu3-sub']; ?></dt>
                <dd class="price__list-money">&yen;<?php echo $fields['price-money3']; ?></dd>
              </dl>
            <?php endforeach; ?>
          <?php endif; ?>
          <h3 class="price__sub-title">スペシャルダイビング</h3>
          <?php
          $front_page_price_group = SCF::get('price-group4', get_page_by_path('price')->ID);
          if ($front_page_price_group) :
          ?>
            <?php foreach ($front_page_price_group as $fields) : ?>
              <dl class="price__list-item">
                <dt class="price__list-menu"><?php echo $fields['price-menu4']; ?><?php echo $fields['price-menu4-sub']; ?></dt>
                <dd class="price__list-money">&yen;<?php echo $fields['price-money4']; ?></dd>
              </dl>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"><span>view&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>