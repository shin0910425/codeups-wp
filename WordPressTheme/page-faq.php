<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__faq">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">FAQ</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div class="page-faq page-faq-layout">
    <div class="page-faq__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-faq__inner inner">
      <div class="page-faq__body">
        <ul class="faq-list">
          <?php
          $faq_group = SCF::get('faq-group', get_page_by_path('faq')->ID);
          $has_content = false;

          if (!empty($faq_group)) :
            foreach ($faq_group as $fields) :
              $faq_question = $fields['faq-question'];
              $faq_answer = $fields['faq-answer'];

              if (!empty($faq_question) && !empty($faq_answer)) :
                $has_content = true;
                ?>
                <li class="faq-list__item">
                  <p class="faq-list__item-question js-faq-question is-open"><?php echo esc_html($faq_question); ?></p>
                  <p class="faq-list__item-answer">
                    <?php echo esc_html($faq_answer); ?>
                  </p>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
          <?php if (!$has_content) : ?>
            <li class="faq-list__item">
              <p class="faq-list__item-message">FAQが見つかりませんでした。</p>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>