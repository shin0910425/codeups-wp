<aside class="page-blog__sidebar">

  <?php
  if (is_active_sidebar('sidebar-widgets')) {
    dynamic_sidebar('sidebar-widgets');
  }
  ?>

  <ul class="page-blog__sidebar-items">
    <li class="page-blog__sidebar-item">
      <h3 class="page-blog__sidebar-title">人気記事</h3>
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
        <ul class="page-blog__ranking-items">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="page-blog__ranking-item">
              <article class="page-blog__ranking ranking-1st">
                <a href="<?php the_permalink(); ?>" class="page-blog__ranking-link">
                  <div class="page-blog__ranking-img-wrap">
                    <div class="page-blog__ranking-img">
                      <div class="page-blog__ranking-img">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('full', array('class' => 'img')); ?>
                        <?php else : ?>
                          <img class="img" src="<?php echo esc_url(get_theme_file_uri("/images/common/noimage.jpg")); ?>" alt="NoImage画像" />
                        <?php endif; ?>
                      </div>

                    </div>
                  </div>
                  <div class="page-blog__wrap">
                    <time datetime="<?php the_time('c') ?>" class="page-blog__date"><?php the_time('Y.m.d') ?></time>
                    <p class="page-blog__ranking-title"><?php the_title(); ?></p>
                  </div>
                </a>
              </article>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php endif; ?>
    </li>

    <li class="page-blog__sidebar-item">
      <h3 class="page-blog__sidebar-title">口コミ</h3>
      <ul class="page-blog__ranking-items">
        <li class="page-blog__ranking-item">
          <article class="page-blog__reviews">
            <a class="page-blog__reviews-link" href="<?php echo esc_url(home_url('/voice')); ?>">
              <div class="page-blog__reviews-img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/side-voice_img.jpg" alt="省略">
              </div>
              <div class="page-blog__reviews-tag">30代(カップル)</div>
              <p class="page-blog__reviews-title">ここにタイトルが入ります。ここにタイトル</p>
            </a>
            <div class="page-blog__reviews-button">
              <a href="#" class="button"><span>view&nbsp;more</span></a>
            </div>
          </article>
        </li>
      </ul>
    </li>

    <li class="page-blog__sidebar-item">
      <h3 class="page-blog__sidebar-title">キャンペーン</h3>
      <ul class="page-blog__ranking-items">
        <li class="page-blog-cards__item page-campaign--layout">
          <div class="page-blog-card">
            <div class="page-blog-card__container">
              <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="page-blog-card__link">
                <div>
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign_img1.jpg" alt="魚の群れ">
                </div>
                <div class="page-blog-card__body">
                  <div class="page-blog-card__mete">
                    <p class="page-blog-card__tag">ライセンス講習</p>
                  </div>
                  <div class="page-blog-card__body-head">
                    <h3 class="page-blog-card__title">ライセンス取得</h3>
                  </div>
                  <div class="page-blog-card__charge">
                    <p class="page-blog-card__charge-text">全部コミコミ(お一人様)</p>
                    <div class="page-blog-card__charge-box">
                      <p class="page-blog-card__charge-price-1">&yen;56,000</p>
                      <p class="page-blog-card__charge-price-2">&yen;46,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="page-blog-cards__item page-campaign--layout">
          <div class="page-blog-card">
            <div class="page-blog-card__container">
              <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="page-blog-card__link">
                <div>
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign_img2.jpg" alt="船と海の風景">
                </div>
                <div class="page-blog-card__body">
                  <div class="page-blog-card__mete">
                    <p class="page-blog-card__tag">体験ダイビング</p>
                  </div>
                  <div class="page-blog-card__body-head">
                    <h3 class="page-blog-card__title">貸切体験ダイビング</h3>
                  </div>
                  <div class="page-blog-card__charge">
                    <p class="page-blog-card__charge-text">全部コミコミ(お一人様)</p>
                    <div class="page-blog-card__charge-box">
                      <p class="page-blog-card__charge-price-1">&yen;24,000</p>
                      <p class="page-blog-card__charge-price-2">&yen;18,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul>
      <div class="page-blog__reviews-button">
        <a href="#" class="button"><span>view&nbsp;more</span></a>
      </div>
    </li>

    <li class="page-blog__sidebar-item">
      <h3 class="page-blog__sidebar-title">アーカイブ</h3>
      <div class="page-blog__box">
        <ul class="page-blog__year">
          <?php wp_get_archives('type=yearly'); ?>
        </ul>
        <ul class="page-blog__category-items">
          <?php wp_get_archives('type=monthly'); ?>



    </li>
  </ul>
  </div>
  </li>
  </ul>
</aside>