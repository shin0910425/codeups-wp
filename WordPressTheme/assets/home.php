<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__blog">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Blog</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>


<main>
  <section class="page-blog page-blog-layout">
    <div class="page-blog__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-blog__inner inner">
      <div class="page-blog__wrapper">
        <div class="page-blog__body">
          <div class="page-blog__items">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>

                <div class="page-blog__item blog-cards__item">
                  <div class="blog-card">
                    <a href="<?php the_permalink(); ?>" class="blog-card__link">
                      <div class="blog-card__box">
                        <div class="blog-card__image">
                          <?php if (get_the_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
                          <?php else : ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
                          <?php endif; ?>
                        </div>
                        <div class="blog-card__mete">
                          <time datetime="<?php the_time('c') ?>" class="blog-card__time"><?php the_time('Y.m/d') ?></time>
                          <h3 class="blog-card__title"><?php the_title(); ?></h3>
                        </div>
                      </div>
                      <div class="blog-card__body">
                        <p class="blog-card__text"><?php the_content(); ?>
                      </div>
                    </a>
                  </div>
                </div>
            <?php endwhile;
            endif; ?>
          </div>

          <nav class="pagination u-desktop">
            <div class="wp-pagination">
              <?php wp_pagenavi(); ?>
            </div>
          </nav>
        </div>

        <!-- sidebar -->
        <aside class="page-blog__sidebar">
          <ul class="page-blog__sidebar-items">
            <li class="page-blog__sidebar-item">
              <h3 class="page-blog__sidebar-title">人気記事</h3>
              <ul class="page-blog__ranking-items">
                <li class="page-blog__ranking-item">
                  <article class="page-blog__ranking">
                    <a class="page-blog__ranking-link" href="#">
                      <div class="page-blog__ranking-img-wrap">
                        <div class="page-blog__ranking-img">
                          <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog-card_img1.jpg" alt="黄色い魚が">
                        </div>
                      </div>
                      <div class="page-blog__wrap">
                        <time class="page-blog__date" datetime="2023-11-17">2023.11.17</time>
                        <p class="page-blog__ranking-title">ライセンス取得</p>
                      </div>
                    </a>
                  </article>
                </li>
                <li class="page-blog__ranking-item">
                  <article class="page-blog__ranking">
                    <a class="page-blog__ranking-link" href="#">
                      <div class="page-blog__ranking-img-wrap">
                        <div class="page-blog__ranking-img">
                          <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_img2.jpg" alt="海亀が泳いでいる">
                        </div>
                      </div>
                      <div class="page-blog__wrap">
                        <time class="page-blog__date" datetime="2023-11-17">2023.11.17</time>
                        <p class="page-blog__ranking-title">ウミガメと泳ぐ</p>
                      </div>
                    </a>
                  </article>
                </li>
                <li class="page-blog__ranking-item">
                  <article class="page-blog__ranking">
                    <a class="page-blog__ranking-link" href="#">
                      <div class="page-blog__ranking-img-wrap">
                        <div class="page-blog__ranking-img">
                          <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_img3.jpg" alt="省略">
                        </div>
                      </div>
                      <div class="page-blog__wrap">
                        <time class="page-blog__date" datetime="2023-11-17">2023.11.17</time>
                        <p class="page-blog__ranking-title">カクレクマノミ</p>
                      </div>
                    </a>
                  </article>
                </li>
              </ul>
            </li>

            <li class="page-blog__sidebar-item">
              <h3 class="page-blog__sidebar-title">口コミ</h3>
              <ul class="page-blog__ranking-items">
                <li class="page-blog__ranking-item">
                  <article class="page-blog__reviews">
                    <a class="page-blog__reviews-link" href="#">
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
                      <a href="#" class="page-blog-card__link">
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
                      <a href="#" class="page-blog-card__link">
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
                <div class="page-blog_year1">2023</div>
                <ul class="page-blog__category-items">
                  <li class="page-blog__category-item">
                    <a class="page-blog__category-month" href="#">3月</a>
                  </li>
                  <li class="page-blog__category-item">
                    <a class="page-blog__category-month" href="#">2月</a>
                  </li>
                  <li class="page-blog__category-item">
                    <a class="page-blog__category-month" href="#">1月</a>
                  </li>
                </ul>
                <div class="page-blog_year2">2022</div>
              </div>
            </li>

          </ul>
        </aside>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>