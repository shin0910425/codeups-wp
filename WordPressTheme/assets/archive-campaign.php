<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__campaign">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Campaign</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>


<section id="campaign" class="page-campaign page-campaign-layout">
  <div class="page-campaign__icon-image1">
    <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
  </div>
  <div class="page-campaign__inner inner">
    <div class="page-campaign__tab">
      <div class="page-campaign__tab-list">
        <a href="#" class="page-campaign__tab-item active" data-filter="catAll">ALL</a>
        <a href="#" class="page-campaign__tab-item" data-filter="catInfo">ライセンス講習</a>
        <a href="#" class="page-campaign__tab-item" data-filter="catEvent">体験ダイビング</a>
        <a href="#" class="page-campaign__tab-item" data-filter="catRecruit">ファンダイビング</a>
      </div>

      <ul class="page-campaign__contents">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="page-campaign__content" data-category="catInfo">
              <div class="page-campaign-card">
                <div class="page-campaign-card__container">
                  <div class="page-campaign-card__link">
                    <div class="page-campaign-card__link-img">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
                      <?php endif; ?>
                    </div>
                    <div class="page-campaign-card__body">
                      <div class="page-campaign-card__mete">
                        <p class="page-campaign-card__tag"><?php the_tags(); ?></p>
                      </div>
                      <div class="page-campaign-card__body-head">
                        <h3 class="page-campaign-card__title"><?php the_title(); ?></h3>
                      </div>
                      <div class="page-campaign-card__charge">
                        <p class="page-campaign-card__charge-text">全部コミコミ(お一人様)</p>
                        <div class="page-campaign-card__charge-box">
                          <p class="page-campaign-card__charge-price-1">&yen;56,000</p>
                          <p class="page-campaign-card__charge-price-2">&yen;46,000</p>
                        </div>
                      </div>
                      <div class="page-campaign-card_box u-desktop">
                        <p class="page-campaign-card_text"><?php the_excerpt(); ?>
                        </p>
                        <time class="page-campaign-card__time" datetime="<?php echo esc_attr(date('Y-m-d', strtotime('2023-06-01'))); ?>">2023/6/1-9/30</time>

                        <p class="page-campaign-card_contact-text">ご予約・お問い合わせはコチラ</p>
                        <div class="page-campaign-card__button">
                          <a href="#" class="button"><span>Contact&nbsp;us</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
        <?php endwhile;
        endif; ?>
      </ul>
    </div>
  </div>
</section>

<nav class="pagination u-desktop">
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
  <div class="wp-pagination">
    <?php wp_pagenavi(); ?>
  </div>
</nav>

<?php get_footer(); ?>