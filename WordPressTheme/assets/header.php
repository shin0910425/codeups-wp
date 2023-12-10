<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <!-- <link rel="”icon”" href="" /> -->
  <!-- googleFont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/style.css" />
  <!-- JavaScript -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/js/script.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js"></script> -->
</head>

<body>
  <!-- header -->
  <header class="header header-layout">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="#">
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
            <a href="#campaign"><span>Campaign</span>キャンペーン</a>
          </li>
          <li class="pc-nav__item">
            <a href="#about"><span>About us</span>私たちについて</a>
          </li>
          <li class="pc-nav__item">
            <a href="#information"><span>Information</span>ダイビング情報</a>
          </li>
          <li class="pc-nav__item">
            <a href="#blog"><span>Blog</span>ブログ</a>
          </li>
          <li class="pc-nav__item">
            <a href="#voice"><span>Voice</span>お客様の声</a>
          </li>
          <li class="pc-nav__item">
            <a href="#price"><span>Price</span>料金一覧</a>
          </li>
          <li class="pc-nav__item">
            <a href="#footer"><span>FAQ</span>よくある質問</a>
          </li>
          <li class="pc-nav__item">
            <a href="#contact"><span>Contact</span>お問合せ</a>
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
                    <a href="#campaign">キャンペーン</a>
                  </div>
                  <ul class="sp-nav__sub-item">
                    <li class="sp-nav__sub-list">
                      <a href="#campaign">ライセンス取得</a>
                      <a href="#campaign">貸切体験ダイビング</a>
                      <a href="#campaign">ナイトダイビング</a>
                    </li>
                  </ul>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="#about">私たちについて</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="#information">ダイビング情報</a>
                  </div>
                  <ul class="sp-nav__sub-item">
                    <li class="sp-nav__sub-list">
                      <a href="#information">ライセンス講習</a>
                      <a href="#information">体験ダイビング</a>
                      <a href="#information">ファンダイビング</a>
                    </li>
                  </ul>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="#blog">ブログ</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="sp-nav__right">
              <ul class="sp-nav__items">
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="#voice">お客様の声</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="#price">料金一覧</a>
                  </div>
                  <ul class="sp-nav__sub-item">
                    <li class="sp-nav__sub-list">
                      <a href="#price">ライセンス取得</a>
                      <a href="#price">体験ダイビング</a>
                      <a href="#price">ファンダイビング</a>
                    </li>
                  </ul>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="#faq">よくある質問</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="#faq">プライバシー<br>
                      ポリシー</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="#faq">利用規約</a>
                  </div>
                </li>
                <li class="sp-nav__item">
                  <div class="sp-nav__box">
                    <a href="#contact">お問い合わせ</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>