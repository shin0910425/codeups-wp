<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__privacy">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">
      <?php
      if (is_page('terms-of-service')) {
        echo 'Terms of Service';
      } elseif (is_page('privacypolicy')) {
        echo 'Privacy Policy';
      } else {
        // デフォルトのタイトルを表示する場合はここに追加
        echo 'Default Title';
      }
      ?>
    </h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <?php if (have_posts()) : ?>
    <?php
    // ページに応じたクラスを設定
    $page_class = '';
    if (is_page('terms-of-service')) {
      $page_class = 'page-terms';
    } elseif (is_page('privacypolicy')) {
      $page_class = 'page-privacy';
    }
    ?>
    <div class="<?php echo $page_class; ?> <?php echo $page_class; ?>-layout">
      <div class="<?php echo $page_class; ?>__icon-image1">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
      </div>
      <div class="<?php echo $page_class; ?>__inner inner">
        <?php while (have_posts()) : the_post(); ?>
          <h2 class="<?php echo $page_class; ?>__title"><?php the_title(); ?></h2>
          <div class="<?php echo $page_class; ?>__text-box">
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>