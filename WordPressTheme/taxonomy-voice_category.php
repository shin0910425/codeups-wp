<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__voice">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Voice</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <section class="page-voice page-voice-layout">
    <div class="page-voice__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-voice__inner inner">
      <div class="page-voice__tab page-tab">

        <div class="page-tab_list">
          <a href="<?php echo esc_url(home_url('/voice')); ?>" class="page-tab_item <?php echo is_post_type_archive('voice') ? 'is-active' : '' ?>" data-filter="catAll">ALL</a>
          <?php
          $args = ['taxonomy' => 'voice_category'];
          $terms = get_terms($args);
          foreach ($terms as $term) {
            // 現在表示されているタームがこのタームかどうかをチェック
            $is_term_active = is_tax('voice_category', $term) ? 'is-active' : '';
            echo '<div class="page-tab_item ' . $is_term_active . '"><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></div>';
          }
          ?>
        </div>

        <ul class="page-voice__contents voice-cards">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="voice-card" data-category="catCourse">
                <div class="voice-card__link">
                  <div class="voice-card__box">
                    <div class="voice-card__item">
                      <div class="voice-card__mete">
                        <?php
                        // voice-meta グループフィールドからサブフィールドの値を取得
                        $voice_meta = get_field('voice-meta');

                        if ($voice_meta) {
                          // voice-age と voice-sex の値を変数に格納
                          $voice_age = $voice_meta['voice-age'];
                          $voice_sex = $voice_meta['voice-sex'];

                          if ($voice_age || $voice_sex) {
                        ?>
                            <div class="voice-card__category">
                              <p class="voice-card__category">
                                <?php
                                if ($voice_age) {
                                  echo esc_html($voice_age);
                                }
                                if ($voice_age && $voice_sex) {
                                  echo ' (';
                                }
                                if ($voice_sex) {
                                  echo esc_html($voice_sex);
                                }
                                if ($voice_age && $voice_sex) {
                                  echo ')';
                                }
                                ?>
                              </p>
                            </div>
                        <?php
                          }
                        }
                        ?>

                        <ul class="voice-card__tag">
                          <?php
                          $terms = get_the_terms($post->ID, 'voice_category');
                          if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                              echo '<li><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
                            }
                          }
                          ?>
                        </ul>
                      </div>
                      <h2 class="voice-card__title"><?php the_title(); ?></h2>
                    </div>
                    <div class="voice-card__image">
                      <div class="js-scroll colorbox-scroll"><span class="js-motion-txt colorbox-motion-txt"><span class="js-motion-inner colorbox-motion-inner">
                            <?php if (get_the_post_thumbnail()) : ?>
                              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャチ画像">
                            <?php else : ?>
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                            <?php endif; ?>
                          </span></span></div>
                    </div>
                  </div>
                  <div class="voice-card__body">
                    <div class="voice-card__text"><?php the_content(); ?></div>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>

      </div>

    </div>
  </section>

  <nav class="pagination u-desktop">
    <div>
      <?php wp_pagenavi(); ?>
    </div>
  </nav>

  <?php get_footer(); ?>