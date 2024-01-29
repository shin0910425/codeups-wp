<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__terms">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Terms of Service</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="page-terms page-terms-layout">
  <div class="page-terms__icon-image1">
    <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
  </div>
  <div class="page-terms__inner inner">
    <h2 class="page-terms__title"><?php the_title(); ?></h2>
    <div class="page-terms__text-box">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>