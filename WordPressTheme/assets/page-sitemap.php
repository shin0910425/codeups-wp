<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__sitemap">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Site MAP</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div class="page-sitemap page-sitemap-layout">
    <div class="page-sitemap__icon-image1">
      <img class="u-mobile" src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-sitemap__inner inner">
      <div class="page-sitemap__nav-body">
        <div class="page-sitemap__nav-left">
          <ul class="page-sitemap__nav-items">
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a>
              </div>
              <ul class="page-sitemap__sub-item">
                <li class="page-sitemap__sub-list">
                  <?php
                  // キャンペーンのホームページへのリンク
                  $campaign_home_link = esc_url(home_url('/campaign'));
                  $is_campaign_archive = is_post_type_archive('campaign');
                  $args = ['taxonomy' => 'campaign_category'];
                  $terms = get_terms($args);
                  ?>
                  <?php foreach ($terms as $term) : ?>
                    <?php
                    $term_link = get_term_link($term);
                    $is_term_active = is_tax('campaign_category', $term->term_id);
                    ?>
                    <a href="<?php echo esc_url($term_link); ?>" <?php echo $is_term_active ? 'class="is-active"' : ''; ?>>
                      <?php echo $term->name; ?>
                    </a>
                  <?php endforeach; ?>
                </li>

              </ul>
            </li>
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/about')); ?>">私たちについて</a>
              </div>
            </li>
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/information')); ?>">ダイビング情報</a>
              </div>
              <ul class="page-sitemap__sub-item">
                <li class="page-sitemap__sub-list">
                  <a href="<?php echo esc_url(home_url('/information')); ?>">ライセンス講習</a>
                  <a href="<?php echo esc_url(home_url('/information')); ?>">ファンダイビング</a>
                  <a href="<?php echo esc_url(home_url('/information')); ?>">体験ダイビング</a>
                </li>
              </ul>
            </li>
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="page-sitemap__nav-right">
          <ul class="page-sitemap__nav-items">
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a>
              </div>
            </li>
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a>
              </div>
              <ul class="page-sitemap__sub-item">
                <li class="page-sitemap__sub-list">
                  <a href="<?php echo esc_url(home_url('/price')); ?>">ライセンス講習</a>
                  <a href="<?php echo esc_url(home_url('/price')); ?>">体験ダイビング</a>
                  <a href="<?php echo esc_url(home_url('/price')); ?>">ファンダイビング</a>
                  <a href="<?php echo esc_url(home_url('/price')); ?>">スペシャルダイビング</a>
                </li>
              </ul>
            </li>
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a>
              </div>
            </li>
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/sitemap')); ?>">サイトマップ</a>
              </div>
            </li>
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/privacypolicy')); ?>">プライバシー<br class="u-mobile">
                  ポリシー</a>
              </div>
            </li>
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">利用規約</a>
              </div>
            </li>
            <li class="page-sitemap__nav-item">
              <div class="page-sitemap__box">
                <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>