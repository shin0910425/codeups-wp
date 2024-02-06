<?php get_header(); ?>

<!-- パンくず -->
<div class="page-404 breadcrumb-layout__404 breadcrumb--404">
  <?php get_template_part('parts/breadcrumb') ?>
</div>

<main>
  <div class="page-404">
    <div class="page-404__inner inner">
      <div class="page-404__img">
        <div class="page-404__wrap">
          <h2 class="page-404__title">404</h2>
          <p class="page-404__text">申し訳ありません。<br>
            お探しのページが見つかりません。</p>
          <div class="page-404__button">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="button button__404"><span>Page&nbsp;TOP</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>