<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__contact">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Contact</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>



      <main>
        <div class="page-contact page-contact-layout">
          <div class="page-contact__icon-image1">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
          </div>
          <div class="page-contact__inner inner">
            <?php echo do_shortcode('[contact-form-7 id="2aa6578" title="お問い合わせ"]'); ?>
          </div>
        </div>

<?php get_footer(); ?>