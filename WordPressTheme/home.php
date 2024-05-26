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
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-blog__inner inner">
      <div class="page-blog__wrapper">
        <div class="page-blog__body">
          <?php if (have_posts()) : ?>
            <ul class="page-blog__items blog-cards blog-cards--2col">
              <?php while (have_posts()) : the_post(); ?>
                <li class="blog-cards__item">
                  <div class="blog-card">
                    <a href="<?php the_permalink(); ?>" class="blog-card__link">
                      <div class="blog-card__box">
                        <div class="blog-card__image">
                          <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
                          <?php else : ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                          <?php endif; ?>
                        </div>
                        <div class="blog-card__mete">

                          <time class="blog-card__time" datetime="<?php echo get_the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>

                          <h3 class="blog-card__title"><?php the_title(); ?></h3>
                        </div>
                      </div>
                      <div class="blog-card__body">
                        <p class="blog-card__text"><?php echo wp_trim_words(get_the_content(), 85, '…'); ?></p>
                      </div>
                    </a>
                  </div>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>

          <nav class="pagination">

            <!-- ============= ページング ============= -->
            <?php
            $args = array(
              'mid_size' => 2,
              'prev_text' => '<',
              'next_text' => '>',
              'screen_reader_text' => 'ページャー'
            );
            the_posts_pagination($args);
            ?>
          </nav>
        </div>

        <!-- sidebar -->
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>



  <?php get_footer(); ?>