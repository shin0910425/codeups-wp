<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__blog">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Blog</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>


<main>
  <section class="page-blog page-blog-layout">
    <div class="page-blog__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-blog__inner inner">
      <div class="page-blog__wrapper">
        <div class="page-blog__body">
          <div class="page-blog__items">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>

                <div class="page-blog__item blog-cards__item">
                  <div class="blog-card">
                    <a href="<?php the_permalink(); ?>" class="blog-card__link">
                      <div class="blog-card__box">
                        <div class="blog-card__image">
                          <?php if (get_the_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
                          <?php else : ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
                          <?php endif; ?>
                        </div>
                        <div class="blog-card__mete">
                          <time datetime="<?php the_time('c') ?>" class="blog-card__time"><?php the_time('Y.m/d') ?></time>
                          <h3 class="blog-card__title"><?php the_title(); ?></h3>
                        </div>
                      </div>
                      <div class="blog-card__body">
                        <p class="blog-card__text"><?php the_content(); ?>
                      </div>
                    </a>
                  </div>
                </div>
            <?php endwhile;
            endif; ?>
          </div>

          <nav class="pagination u-desktop">
            <div class="wp-pagination">
              <?php wp_pagenavi(); ?>
            </div>
          </nav>
        </div>
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>