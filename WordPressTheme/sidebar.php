<aside class="page-sidebar page-sidebar--detail">

  <?php
  if (is_active_sidebar('sidebar-widgets')) {
    dynamic_sidebar('sidebar-widgets');
  }
  ?>

  <div class="page-sidebar__items">
    <div class="page-sidebar__item">
      <h2 class="page-sidebar__title">人気記事</h2>
      <?php
      $args = array(
        "post_type" => "post",
        "posts_per_page" => 3,
        "orderby" => "date",
        "order" => "DESC",
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <ul class="page-sidebar__ranking-items">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="page-sidebar__ranking-item">
              <article class="page-sidebar__ranking ranking-1st">
                <a href="<?php the_permalink(); ?>" class="page-sidebar__ranking-link">
                  <div class="page-sidebar__ranking-img-wrap">
                    <div class="page-sidebar__ranking-img">
                      <div class="page-sidebar__ranking-img">
                        <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
                        <?php else : ?>
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                        <?php endif; ?>
                      </div>

                    </div>
                  </div>
                  <div class="page-sidebar__wrap">
                    <time class="page-sidebar__date" datetime="<?php echo get_the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                    <p class="page-sidebar__ranking-title"><?php the_title(); ?></p>
                  </div>
                </a>
              </article>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php endif; ?>
    </div>

    <div class="page-sidebar__item">
      <h2 class="page-sidebar__title">口コミ</h2>
      <?php
      $args = array(
        "post_type" => "voice",
        "posts_per_page" => 1,
        "orderby" => "date",
        "order" => "DESC",
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <ul class="page-sidebar__ranking-items">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="page-sidebar__ranking-item">
              <article class="page-sidebar__reviews">
                <a class="page-sidebar__reviews-link" href="<?php echo esc_url(home_url('/voice')); ?>">
                  <div class="page-sidebar__reviews-img">
                    <?php if (get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                    <?php endif; ?>
                  </div>
                  <div class="page-sidebar__reviews-tag">
                    <?php
                    // voice-meta グループフィールドからサブフィールドの値を取得
                    $voice_meta = get_field('voice-meta');

                    // voice-age と voice-sex の値を変数に格納
                    $voice_age = $voice_meta['voice-age'];
                    $voice_sex = $voice_meta['voice-sex'];
                    ?>
                    <div class="voice-card__category">
                      <p class="voice-card__category"><?php echo $voice_age; ?>(<?php echo $voice_sex; ?>)</p>
                    </div>
                  </div>
                  <p class="page-sidebar__reviews-title"><?php the_title(); ?></p>
                </a>
                <div class="page-sidebar__reviews-button">
                  <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button"><span>view&nbsp;more</span></a>
                </div>
              </article>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php endif; ?>

    </div>

    <div class="page-sidebar__item">
      <h2 class="page-sidebar__title">キャンペーン</h2>
      <?php
      $args = array(
        "post_type" => "campaign",
        "posts_per_page" => 2,
        "orderby" => "date",
        "order" => "DESC",
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <ul class="campaign-cards__items">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="campaign-cards__item-sidebar page-sidebar-layout">

              <div class="campaign-card">
                <div class="campaign-card__container">
                  <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="campaign-card__link">

                    <div>
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                      <?php endif; ?>
                    </div>
                    <div class="campaign-card__body campaign-card__body--small">

                      <div class="campaign-card__body-head">
                        <h2 class="campaign-card__title campaign-card__title-center"><?php the_title(); ?></h2>
                      </div>
                      <div class="campaign-card__charge">
                        <p class="campaign-card__charge-text">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__charge-box">
                          <p class="campaign-card__charge-price-1 campaign-card__charge-price-1--size">&yen;<?php the_field('campaign_price_1'); ?></p>
                          <p class="campaign-card__charge-price-2 campaign-card__charge-price-2--size">&yen;<?php the_field('campaign_price_2'); ?></p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

            </li>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php endif; ?>
      <div class="page-sidebar__reviews-button">
        <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button"><span>view&nbsp;more</span></a>
      </div>
    </div>

    <div class="page-sidebar__item">
      <h2 class="page-sidebar__title">アーカイブ</h2>
      <div class="page-sidebar__box js-year">
        <div class="page-sidebar__item">
          <?php
          global $wpdb;
          // データベースからユニークな年を取得（2022年以降）
          $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) >= 2022 ORDER BY post_date DESC");

          foreach ($years as $year) {
            echo '<div class="page-sidebar__box">';
            echo "<div class='page-sidebar__year2 js-year' data-year='{$year}'>{$year}</div>";
            echo '<ul class="page-sidebar__category-items hidden">';

            // その年の各月に投稿があるか確認
            for ($month = 1; $month <= 12; $month++) {
              $query = new WP_Query([
                'year' => $year,
                'monthnum' => $month,
                'post_status' => 'publish',
                'posts_per_page' => -1, // すべての投稿を取得
              ]);

              if ($query->have_posts()) {
                $month_name = date_i18n('F', mktime(0, 0, 0, $month, 10)); // 月の名前を取得
                echo '<li class="page-sidebar__category-item">';
                // 月別アーカイブへのリンク
                echo '<a class="page-sidebar__category-month" href="' . get_month_link($year, $month) . '">' . $month_name . '</a>';
                echo '</li>';
              }
            }
            echo '</ul>';
            echo '</div>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>

</aside>