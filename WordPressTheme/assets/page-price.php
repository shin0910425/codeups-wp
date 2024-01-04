<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__price">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Price</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="page-price page-price-layout">
  <div class="page-price__icon-image1">
    <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
  </div>
  <div class="page-price__inner inner">
    <div class="page-price__list-body">
      <div class="page-price__list-title">
        <div class="page-price__sub-title">ライセンス講習</div>
        <div class="page-price__img">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/information-tab-icon1.svg" alt="">
        </div>
      </div>
      <table class="page-price__box">
        <tbody>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">オープンウォーター<br class="u-mobile">ダイバーコース</td>
            <td class="page-price__list-money">&yen;50,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">アドバンスド<br class="u-mobile">オープンウォーターコース</td>
            <td class="page-price__list-money">&yen;60,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">レスキュー＋EFRコース</td>
            <td class="page-price__list-money">&yen;70,000</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="page-price__list-body">
      <div class="page-price__list-title">
        <div class="page-price__sub-title">体験ダイビング</div>
        <div class="page-price__img">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/information-tab-icon1.svg" alt="">
        </div>
      </div>
      <table class="page-price__box">
        <tbody>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">ビーチ体験ダイビング<br class="u-mobile">(半日)</td>
            <td class="page-price__list-money">&yen;7,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">ビーチ体験ダイビング<br class="u-mobile">(1日)</td>
            <td class="page-price__list-money">&yen;14,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">ボート体験ダイビング<br class="u-mobile">(半日)</td>
            <td class="page-price__list-money">&yen;10,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">ボート体験ダイビング<br class="u-mobile">(1日)</td>
            <td class="page-price__list-money">&yen;18,000</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="page-price__list-body">
      <div class="page-price__list-title">
        <div class="page-price__sub-title">ファンダイビング</div>
        <div class="page-price__img">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/information-tab-icon1.svg" alt="">
        </div>
      </div>
      <table class="page-price__box">
        <tbody>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">ビーチダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="page-price__list-money">&yen;10,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">ボートダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="page-price__list-money">&yen;18,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">スペシャルダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="page-price__list-money">&yen;24,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">ナイトダイビング<br class="u-mobile">(1ダイブ)</td>
            <td class="page-price__list-money">&yen;10,000</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="page-price__list-body">
      <div class="page-price__list-title">
        <div class="page-price__sub-title">スペシャルダイビング</div>
        <div class="page-price__img">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/information-tab-icon1.svg" alt="">
        </div>
      </div>
      <table class="page-price__box">
        <tbody>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">貸切ダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="page-price__list-money">&yen;24,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">1日ダイビング<br class="u-mobile">(3ダイブ)</td>
            <td class="page-price__list-money">&yen;32,000</td>
          </tr>
          <tr class="page-price__list-item">
            <td class="page-price__list-menu">ナイトダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="page-price__list-money">&yen;14,000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php get_footer(); ?>