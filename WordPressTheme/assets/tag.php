<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__voice">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Voice</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<section class="page-voice page-voice-layout">
  <div class="page-voice__icon-image1">
    <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
  </div>
  <div class="page-voice__inner inner">
    <div class="page-voice__tub page-voice__tab">
      <ul class="page-voice__tab-list js-voice__link">
        <li class="page-voice__tab-item active" data-filter="catAll">ALL</li>
        <li class="page-voice__tab-item" data-filter="catCourse">ライセンス講習</li>
        <li class="page-voice__tab-item" data-filter="catExperience">体験ダイビング</li>
        <li class="page-voice__tab-item" data-filter="catDiv">ファンダイビング</li>
      </ul>

      <ul class="page-voice__contents">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="page-voice__item voice-card js-voice-content" data-category="catCourse">
              <a href="#" class="voice-card__link">
                <div class="voice-card__box">
                  <div class="voice-card__item">
                    <div class="voice-card__mete">
                      <p class="voice-card__category">
                        <?php $cat = get_the_category();
                        $cat = $cat[0]; {
                          echo $cat->name;
                        } ?></p>
                      <p class="voice-card__tag"><?php the_tags(''); ?></p>
                    </div>
                    <h2 class="voice-card__title"><?php the_title(); ?></h2>
                  </div>
                  <div class="voice-card__image">
                    <div class="js-scroll colorbox-scroll"><span class="js-motion-txt colorbox-motion-txt"><span class="js-motion-inner colorbox-motion-inner">
                          <?php if (get_the_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
                          <?php else : ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
                          <?php endif; ?>
                        </span></span></div>
                  </div>
                </div>
                <div class="voice-card__body">
                  <p class="voice-card__text"><?php the_content(); ?></p>
                </div>
              </a>
            </li>
        <?php endwhile;
        endif; ?>
      </ul>

    </div>
  </div>
</section>

<nav class="pagination u-desktop">
  <div class="wp-pagination">
    <?php wp_pagenavi(); ?>
  </div>
</nav>

<?php get_footer(); ?>