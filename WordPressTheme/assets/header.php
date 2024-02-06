<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<?php
$home = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$privacypolicy = esc_url(home_url('/privacypolicy/'));
$termsofservise = esc_url(home_url('/terms-of-service/'));
$contact = esc_url(home_url('/contact/'));
$sitemap = esc_url(home_url('/sitemap/'));
?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- header -->
  <header class="header header-layout header-layout__404">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo $home; ?>">
          <?php  ?>
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/CodeUps.svg" alt="CodeUps">
        </a>
      </h1>
      <button class="header__hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $campaign; ?>"><span>Campaign</span>キャンペーン</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $about; ?>"><span>About us</span>私たちについて</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information; ?>"><span>Information</span>ダイビング情報</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $blog; ?>"><span>Blog</span>ブログ</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $voice; ?>"><span>Voice</span>お客様の声</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $price; ?>"><span>Price</span>料金一覧</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $faq; ?>"><span>FAQ</span>よくある質問</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>"><span>Contact</span>お問合せ</a>
          </li>
        </ul>
      </nav>

      <div class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner inner">
          <div class="sp-nav__body">
            <div class="sp-nav__left">
              <ul class="sp-nav__items">
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $campaign; ?>">キャンペーン</a>
                  </div>
                  <ul class="sp-nav__sub-item">
                    <li class="sp-nav__sub-list">
                      <a href="<?php echo $campaign; ?>">ライセンス取得</a>
                      <a href="<?php echo $campaign; ?>">貸切体験ダイビング</a>
                      <a href="<?php echo $campaign; ?>">ナイトダイビング</a>
                    </li>
                  </ul>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $about; ?>">私たちについて</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $information; ?>">ダイビング情報</a>
                  </div>
                  <ul class="sp-nav__sub-item">
                    <li class="sp-nav__sub-list">
                      <a href="<?php echo $information; ?>">ライセンス講習</a>
                      <a href="<?php echo $information; ?>">体験ダイビング</a>
                      <a href="<?php echo $information; ?>">ファンダイビング</a>
                    </li>
                  </ul>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $blog; ?>">ブログ</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="sp-nav__right">
              <ul class="sp-nav__items">
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $voice; ?>">お客様の声</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $price; ?>">料金一覧</a>
                  </div>
                  <ul class="sp-nav__sub-item">
                    <li class="sp-nav__sub-list">
                      <a href="<?php echo $price; ?>">ライセンス取得</a>
                      <a href="<?php echo $price; ?>">体験ダイビング</a>
                      <a href="<?php echo $price; ?>">ファンダイビング</a>
                    </li>
                  </ul>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $faq; ?>">よくある質問</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $privacypolicy; ?>">プライバシー<br>
                      ポリシー</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $termsofservise; ?>">利用規約</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="<?php echo $contact; ?>">お問い合わせ</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>