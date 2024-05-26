<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__price">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Price</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div class="page-price page-price-layout">
    <div class="page-price__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-price__inner inner">
      <?php
      $content_exists = false;

      // License Section
      $price_group = SCF::get('price-group1', get_page_by_path('price')->ID);
      $has_content = false;
      if (!empty($price_group)) {
        foreach ($price_group as $fields) {
          if (!empty($fields['price-menu1']) || !empty($fields['price-money1'])) {
            $has_content = true;
            break;
          }
        }
      }
      if ($has_content) :
        $content_exists = true; ?>
        <div class="page-price__list-body" id="license" tabindex="-1">
          <div class="page-price__list-title">
            <div class="page-price__sub-title">ライセンス講習</div>
            <div class="page-price__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-tab-icon1.svg" alt="">
            </div>
          </div>
          <table class="page-price__box">
            <tbody>
              <?php foreach ($price_group as $fields) : ?>
                <?php if (!empty($fields['price-menu1']) || !empty($fields['price-money1'])) : ?>
                  <tr class="page-price__list-item">
                    <td class="page-price__list-menu"><?php echo $fields['price-menu1']; ?></td>
                    <td class="page-price__list-money">&yen;<?php echo $fields['price-money1']; ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>

      <?php
      // Experience Section
      $price_group = SCF::get('price-group2', get_page_by_path('price')->ID);
      $has_content = false;
      if (!empty($price_group)) {
        foreach ($price_group as $fields) {
          if (!empty($fields['price-menu2']) || !empty($fields['price-menu2-sub']) || !empty($fields['price-money2'])) {
            $has_content = true;
            break;
          }
        }
      }
      if ($has_content) :
        $content_exists = true; ?>
        <div class="page-price__list-body">
          <div class="page-price__list-title" id="experience">
            <div class="page-price__sub-title">体験ダイビング</div>
            <div class="page-price__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-tab-icon1.svg" alt="">
            </div>
          </div>
          <table class="page-price__box">
            <tbody>
              <?php foreach ($price_group as $fields) : ?>
                <?php if (!empty($fields['price-menu2']) || !empty($fields['price-menu2-sub']) || !empty($fields['price-money2'])) : ?>
                  <tr class="page-price__list-item">
                    <td class="page-price__list-menu"><?php echo $fields['price-menu2']; ?><br class="u-mobile"><?php echo $fields['price-menu2-sub']; ?></td>
                    <td class="page-price__list-money">&yen;<?php echo $fields['price-money2']; ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>

      <?php
      // Fun Diving Section
      $price_group = SCF::get('price-group3', get_page_by_path('price')->ID);
      $has_content = false;
      if (!empty($price_group)) {
        foreach ($price_group as $fields) {
          if (!empty($fields['price-menu3']) || !empty($fields['price-menu3-sub']) || !empty($fields['price-money3'])) {
            $has_content = true;
            break;
          }
        }
      }
      if ($has_content) :
        $content_exists = true; ?>
        <div class="page-price__list-body">
          <div class="page-price__list-title" id="fun">
            <div class="page-price__sub-title">ファンダイビング</div>
            <div class="page-price__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-tab-icon1.svg" alt="">
            </div>
          </div>
          <table class="page-price__box">
            <tbody>
              <?php foreach ($price_group as $fields) : ?>
                <?php if (!empty($fields['price-menu3']) || !empty($fields['price-menu3-sub']) || !empty($fields['price-money3'])) : ?>
                  <tr class="page-price__list-item">
                    <td class="page-price__list-menu"><?php echo $fields['price-menu3']; ?><br class="u-mobile"><?php echo $fields['price-menu3-sub']; ?></td>
                    <td class="page-price__list-money">&yen;<?php echo $fields['price-money3']; ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>

      <?php
      // Special Diving Section
      $price_group = SCF::get('price-group4', get_page_by_path('price')->ID);
      $has_content = false;
      if (!empty($price_group)) {
        foreach ($price_group as $fields) {
          if (!empty($fields['price-menu4']) || !empty($fields['price-menu4-sub']) || !empty($fields['price-money4'])) {
            $has_content = true;
            break;
          }
        }
      }
      if ($has_content) :
        $content_exists = true; ?>
        <div class="page-price__list-body">
          <div class="page-price__list-title" id="special">
            <div class="page-price__sub-title">スペシャルダイビング</div>
            <div class="page-price__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-tab-icon1.svg" alt="">
            </div>
          </div>
          <table class="page-price__box">
            <tbody>
              <?php foreach ($price_group as $fields) : ?>
                <?php if (!empty($fields['price-menu4']) || !empty($fields['price-menu4-sub']) || !empty($fields['price-money4'])) : ?>
                  <tr class="page-price__list-item">
                    <td class="page-price__list-menu"><?php echo $fields['price-menu4']; ?><br class="u-mobile"><?php echo $fields['price-menu4-sub']; ?></td>
                    <td class="page-price__list-money">&yen;<?php echo $fields['price-money4']; ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>

      <?php if (!$content_exists) : ?>
        <p class="page-price__message">現在準備中です。</p>
      <?php endif; ?>
    </div>


  </div>

  <?php get_footer(); ?>