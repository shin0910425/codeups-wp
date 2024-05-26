<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__campaign">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Campaign</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <section id="campaign" class="page-campaign page-campaign-layout">
    <div class="page-campaign__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-campaign__inner inner">
      <div class="page-campaign__tab page-tab">

        <div class="page-tab_list">
          <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="page-tab_item <?php echo is_post_type_archive('campaign') ? 'is-active' : '' ?>" data-filter="catAll">ALL</a>
          <?php
          $args = ['taxonomy' => 'campaign_category'];
          $terms = get_terms($args);
          if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
              echo '<div class="page-tab_item"><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></div>';
            }
          }
          ?>
        </div>

        <ul class="page-campaign__contents">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php
              // ACFフィールドの値を取得
              $campaign_price_1 = get_field('campaign_price_1');
              $campaign_price_2 = get_field('campaign_price_2');
              $campaign_date_display_start = get_field('campaign_date_display_start');
              $campaign_date_display_end = get_field('campaign_date_display_end');

              // 全てのフィールドが空かどうかをチェック
              if (empty($campaign_price_1) && empty($campaign_price_2) && empty($campaign_date_display_start) && empty($campaign_date_display_end)) {
                continue; // 次のループにスキップ
              }
              ?>
              <li class="page-campaign__content" data-category="catInfo">
                <div class="page-campaign-card">
                  <div class="page-campaign-card__container">
                    <div class="page-campaign-card__link">
                      <div class="page-campaign-card__link-img">
                        <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
                        <?php else : ?>
                          <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
                        <?php endif; ?>
                      </div>
                      <div class="page-campaign-card__body">
                        <div class="page-campaign-card__mete">
                          <p class="page-campaign-card__tag">
                            <?php
                            $terms = get_the_terms($post->ID, 'campaign_category');
                            if (!empty($terms) && !is_wp_error($terms)) {
                              foreach ($terms as $term) {
                                echo '<a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a>';
                              }
                            }
                            ?>
                          </p>
                        </div>
                        <div class="page-campaign-card__body-head">
                          <h3 class="page-campaign-card__title"><?php the_title(); ?></h3>
                        </div>
                        <div class="page-campaign-card__charge">
                          <p class="page-campaign-card__charge-text">全部コミコミ(お一人様)</p>
                          <div class="page-campaign-card__charge-box">
                            <?php if ($campaign_price_1) : ?>
                              <p class="page-campaign-card__charge-price-1">&yen;<?php echo esc_html($campaign_price_1); ?></p>
                            <?php endif; ?>
                            <?php if ($campaign_price_2) : ?>
                              <p class="page-campaign-card__charge-price-2">&yen;<?php echo esc_html($campaign_price_2); ?></p>
                            <?php endif; ?>
                          </div>
                        </div>
                        <div class="page-campaign-card_box u-desktop">
                          <?php
                          // PHPの出力を変数に保存
                          $excerpt = get_the_excerpt();
                          ?>

                          <p class="page-campaign-card_text"><?php echo $excerpt; ?></p>
                          <?php if ($campaign_date_display_start && $campaign_date_display_end) : ?>
                            <time class="page-campaign-card__time" datetime="<?php echo get_the_time('c'); ?>">
                              <?php echo esc_html($campaign_date_display_start); ?>-<?php echo esc_html($campaign_date_display_end); ?>
                            </time>
                          <?php endif; ?>
                          <p class="page-campaign-card_contact-text">ご予約・お問い合わせはコチラ</p>
                          <div class="page-campaign-card__button">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button"><span>Contact&nbsp;us</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>


    </div>
  </section>

  <nav class="pagination">
    <!-- ============= ページング ============= -->
    <?php
    $args = [
      'mid_size' => 2,
      'prev_text' => '<',
      'next_text' => '>',
      'screen_reader_text' => 'ページャー'
    ];
    the_posts_pagination($args);
    ?>
    <div>
      <?php wp_pagenavi(); ?>
    </div>
  </nav>

  <?php get_footer(); ?>