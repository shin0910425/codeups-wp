<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__about">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">About us</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <section id="about" class="page-about page-about-layout">
    <div class="page-about__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-about__icon-image">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img4.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-about__inner inner">
      <div class="page-about__container">
        <div class="page-about__img-box">
          <div class="page-about__image-1">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/about_img1.jpg" alt="屋根の上にシーサーの置き物">
          </div>
          <div class="page-about__image-2">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/about_img2.jpg" alt="魚の群れ">
          </div>
        </div>
        <div class="page-about__body">
          <h3 class="page-about__sub-title">Dive into<br>
            the Ocean</h3>
          <div class="page-about__text-box">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="about-gallery about-gallery-layout">
    <div class="about-gallery__inner inner">
      <div class="about-gallery__title section-header">
        <p class="section-header__sub">Gallery</p>
        <h2 class="section-header__main">フォト</h2>
      </div>
      <div class="about-gallery__top">
        <div class="about-gallery__list gallery-list">
          <?php
          $gallery_group = SCF::get('gallery-group', get_page_by_path('about')->ID);

          if ($gallery_group) :
            foreach ($gallery_group as $index => $fields) :
              $image_url = $fields['gallery-image'];
          ?>
              <div class="gallery-list__box">
                <div class="gallery-list__button js-modal-open" data-target="<?php echo $index + 1; ?>">
                  <div class="gallery-list__item">
                    <img src="<?php echo wp_get_attachment_url($image_url); ?>" alt="画像の説明">
                  </div>
                </div>
                <div class="gallery-list__modal modal js-modal js-modal-close" id="<?php echo $index + 1; ?>">
                  <div class="modal__body">
                    <div class="modal__img">
                      <img src="<?php echo wp_get_attachment_url($image_url); ?>" alt="画像の説明">
                    </div>
                  </div>
                </div>
              </div>
          <?php
            endforeach;
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>