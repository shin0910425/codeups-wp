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
      <ul class="page-campaign__tab-list js-campaign__link">
        <li class="page-campaign__tab-item active" data-filter="catAll">ALL</li>
        <li class="page-campaign__tab-item" data-filter="catInfo">ライセンス講習</li>
        <li class="page-campaign__tab-item" data-filter="catEvent">体験ダイビング</li>
        <li class="page-campaign__tab-item" data-filter="catRecruit">ファンダイビング</li>
      </ul>

      <ul class="page-campaign__contents">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="page-campaign__content js-campaign-content" data-category="catInfo">
              <div class="page-campaign-card">
                <div class="page-campaign-card__container">
                  <div class="page-campaign-card__link">
                    <div class="page-campaign-card__link-img">
                      <?php if (get_the_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
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
                        <p class="page-campaign-card_text"><?php the_content(); ?>
                        </p>
                        <time class="page-campaign-card__time" datetime="2023-06-01">2023/6/1-9/30</time>
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
  <div class="wp-pagination">
    <?php wp_pagenavi(); ?>
  </div>
</nav>

<?php get_footer(); ?>