<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__blog">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Blog</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<section class="page-blog page-blog-layout">
  <div class="page-blog__icon-image1">
    <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
  </div>
  <div class="page-blog__inner inner">
    <div class="page-blog__wrapper">

      <div class="page-blog-detail__body">
        <div class="page-blog-detail__mete">
          <time class="blog-card__time" datetime="2023-11-17">2023.11/17</time>
        </div>
        <div class="page-blog-detail__container">
          <h2 class="page-blog-detail__title">ウミガメと泳ぐ</h2>
          <div class="page-blog-detail__image">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_img2.jpg" alt="海亀が泳いでいる画像">
          </div>
          <p class="page-blog-detail__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
          <div class="page-blog-detail__image">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_img2.jpg" alt="海亀が泳いでいる画像">
          </div>
          <p class="page-blog-detail__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>

          <ul class="page-blog-detail__list">
            <li class="page-blog-detail__item">リスト1</li>
            <li class="page-blog-detail__item">リスト2</li>
            <li class="page-blog-detail__item">リスト3</li>
          </ul>
          <p class="page-blog-detail__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
        <nav class="pagination u-desktop">
          <div class="wp-pagination">
            <a class="prev page-numbers" href="">&lsaquo;</a>
            <!-- <span aria-current="page" class="page-numbers current">1</span>
                <a class="page-numbers" href="">2</a>
                <a class="page-numbers" href="">3</a>
                <a class="page-numbers" href="">4</a>
                <a class="page-numbers" href="">5</a>
                <a class="page-numbers" href="">6</a> -->
            <a class="next page-numbers" href="">&rsaquo;</a>
          </div>
        </nav>
      </div>

      <!-- sidebar -->
      <?php get_sidebar() ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>