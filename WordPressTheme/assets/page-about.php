<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__about">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">About us</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>


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
          <p class="page-about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>

        </div>
      </div>
    </div>
    <div class="page-about__title section-header">
      <p class="section-header__sub">Gallery</p>
      <h2 class="section-header__main">フォト</h2>
    </div>

    <div class="page-about__gallery about-gallery-layout">
      <div class="about-gallery">
        <div class="about-gallery__list gallery-list">
          <div class="gallery-list__box">
            <div class="gallery-list__item js-modal-open" data-target="1">
              <div class="gallery-list__item gallery-list__big1">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img1.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
              </div>
            </div>
            <div class="gallery-list__modal modal js-modal js-modal-close" id="1">
              <div class="modal__inner">
                <div class="modal__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img1.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
                </div>
              </div>
            </div>
          </div>
          <div class="gallery-list__box">
            <div class="gallery-list__item js-modal-open" data-target="2">
              <div class="gallery-list__item">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img2.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
              </div>
            </div>
            <div class="gallery-list__modal modal js-modal js-modal-close" id="2">
              <div class="modal__inner">
                <div class="modal__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img2.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
                </div>
              </div>
            </div>
          </div>
          <div class="gallery-list__box">
            <div class="gallery-list__item js-modal-open" data-target="3">
              <div class="gallery-list__item">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img3.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
              </div>
            </div>
            <div class="gallery-list__modal modal js-modal js-modal-close" id="3">
              <div class="modal__inner">
                <div class="modal__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img3.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
                </div>
              </div>
            </div>
          </div>
          <div class="gallery-list__box">
            <div class="gallery-list__item js-modal-open" data-target="4">
              <div class="gallery-list__item">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img4.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
              </div>
            </div>
            <div class="gallery-list__modal modal js-modal js-modal-close" id="4">
              <div class="modal__inner">
                <div class="modal__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img4.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
                </div>
              </div>
            </div>
          </div>
          <div class="gallery-list__box">
            <div class="gallery-list__item js-modal-open" data-target="5">
              <div class="gallery-list__item">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img5.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
              </div>
            </div>
            <div class="gallery-list__modal modal js-modal js-modal-close" id="5">
              <div class="modal__inner">
                <div class="modal__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img5.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
                </div>
              </div>
            </div>
          </div>
          <div class="gallery-list__box">
            <div class="gallery-list__item js-modal-open" data-target="6">
              <div class="gallery-list__item">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img6.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
              </div>
            </div>
            <div class="gallery-list__modal modal js-modal js-modal-close" id="6">
              <div class="modal__inner">
                <div class="modal__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-gallery_img6.jpg" alt="珊瑚礁の周りを多くの魚が泳いでいる">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>