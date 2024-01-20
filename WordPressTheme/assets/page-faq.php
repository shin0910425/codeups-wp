<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__faq">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">FAQ</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="page-faq page-faq-layout">
  <div class="page-faq__icon-image1">
    <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
  </div>
  <div class="page-faq__inner inner">
    <div class="page-faq__body">
      <ul class="faq-list">
        <?php
        $faq_group = SCF::get('faq-group', get_page_by_path('faq')->ID);
        foreach ($faq_group as $fields) :
        ?>
          <li class="faq-list__item">
            <p class="faq-list__item-question js-faq-question"><?php echo $fields['faq-question']; ?></p>
            <p class="faq-list__item-answer">
              <?php echo $fields['faq-answer']; ?>
            </p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<?php get_footer(); ?>