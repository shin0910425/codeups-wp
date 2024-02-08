<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__privacy">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Privacy Policy</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div class="page-privacy page-privacy-layout">
    <div class="page-privacy__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-privacy__inner inner">
      <h2 class="page-privacy__title"><?php the_title(); ?></h2>
      <div class="page-privacy__text-box">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>