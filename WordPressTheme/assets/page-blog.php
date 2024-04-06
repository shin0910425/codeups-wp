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
          <?php if (have_posts()) : ?>
            <ul class="page-blog__items blog-cards">
              <?php while (have_posts()) : the_post(); ?>
                <li class="page-blog__item blog-cards__item">
                  <div class="blog-card">
                    <a href="<?php echo esc_url(home_url('/blog/blog-detail')); ?>" class="blog-card__link">
                      <div class="blog-card__box">
                        <div class="blog-card__image">
                          <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_img1.jpg" alt="珊瑚礁">
                        </div>
                        <div class="blog-card__mete">
                          <!-- <time class="blog-card__time"><?php the_time('Y.m/d') ?></time> -->
                          <time class="blog-card__time" datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php the_time('Y.m/d'); ?></time>

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
            </ul>
          <?php endif; ?>

          <nav class="pagination u-desktop">
            <div>
              <a class="prev page-numbers" href="">&lsaquo;</a>
              <span aria-current="page" class="page-numbers current">1</span>
              <a class="page-numbers" href="">2</a>
              <a class="page-numbers" href="">3</a>
              <a class="page-numbers" href="">4</a>
              <a class="page-numbers" href="">5</a>
              <a class="page-numbers" href="">6</a>
              <a class="next page-numbers" href="">&rsaquo;</a>
            </div>
          </nav>
        </div>

        <!-- sidebar -->
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>