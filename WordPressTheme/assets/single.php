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
    <div class="page-blog__inner inner page-blog-detail--inner">
      <div class="page-blog__wrapper">

        <div class="page-blog-detail__body">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="page-blog-detail__mete">
                <!-- <time datetime="<?php the_time('c') ?>" class="blog-card__time"><?php the_time('Y.m/d') ?></time> -->
                <time class="blog-card__time" datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php the_time('Y.m/d'); ?></time>

              </div>
              <div class="page-blog-detail__container">
                <h2 class="page-blog-detail__title"><?php the_title(); ?></h2>
                <div class="page-blog-detail__image">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full', array('class' => 'img')); ?>
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                </div>
                <div class="page-blog-detail__text">
                  <?php the_content(); ?>
                </div>
                <!-- <p class="page-blog-detail__text">
                  <?php the_content(); ?>
                </p> -->

                <!-- <ul class="page-blog-detail__list">
                  <li class="page-blog-detail__item">リスト1</li>
                  <li class="page-blog-detail__item">リスト2</li>
                  <li class="page-blog-detail__item">リスト3</li>
                </ul> -->
                <!-- <p class="page-blog-detail__text">
                  <?php the_content(); ?>
                </p> -->
              </div>

              <nav class="pagination pagination--detail">
                <div>
                  <?php
                  $prev = get_previous_post();
                  if (!empty($prev)) {
                    $prev_url = esc_url(get_permalink($prev->ID));
                  }

                  $next = get_next_post();
                  if (!empty($next)) {
                    $next_url = esc_url(get_permalink($next->ID));
                  }
                  ?>
                  <?php if (!empty($prev)) : ?>
                    <a class="prev page-numbers" href="<?php echo $prev_url; ?>">&lt;</a>
                  <?php endif; ?>
                  <?php if (!empty($next)) : ?>
                    <a class="next page-numbers" href="<?php echo $next_url; ?>">&gt;</a>
                  <?php endif; ?>
                </div>
              </nav>

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

        <?php get_sidebar() ?>

      </div>
    </div>
  </section>
<?php endwhile;
          endif; ?>

<?php get_footer(); ?>