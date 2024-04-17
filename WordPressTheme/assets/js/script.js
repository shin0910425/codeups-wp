"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  //トップへ戻る------------------------------------------
  var topBtn = $('.to-top');
  topBtn.hide();

  // // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // フッターの位置を計算する関数
  function updateToTopButtonPosition() {
    var footer = $('#footer');
    var footerTop = footer.offset().top;
    var windowHeight = $(window).height();
    var scrollTop = $(window).scrollTop();
    var windowWidth = $(window).width();
    var buttonOffset; // ボタンの位置を保持する変数

    if (windowWidth <= 767) {
      // 767px以下の場合
      buttonOffset = -14; // -30pxのオフセット
    } else {
      // 767pxより大きい場合
      buttonOffset = -20; // 20pxのオフセット
    }

    if (scrollTop + windowHeight >= footerTop + buttonOffset) {
      // ウィンドウの下部がフッターの上部よりオフセット値以上下にある場合
      var diff = scrollTop + windowHeight - (footerTop + buttonOffset);
      topBtn.css('bottom', diff + 'px');
    } else {
      // ウィンドウの下部がフッターの上部よりオフセット値より上にある場合
      topBtn.css('bottom', buttonOffset + 'px');
    }
  }

  // ページ読み込み時とウィンドウのリサイズ時に関数を呼び出す
  $(window).on('load resize', function () {
    updateToTopButtonPosition();
  });

  // スクロール時にも関数を呼び出す
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
    updateToTopButtonPosition(); // スクロール時にボタンの位置を更新
  });

  // ヘッダークラス名付与-------------------------------------
  var header = $('.header');
  var headerHeight = $('.header').height();
  var height = $('.mv').height();
  $(window).scroll(function () {
    if ($(this).scrollTop() > height - headerHeight) {
      header.addClass('is-color');
    } else {
      header.removeClass('is-color');
    }
  });

  // ドロワーメニュー ------------------------------------------
  $(".js-hamburger").click(function () {
    if ($(".js-hamburger").hasClass('is-active')) {
      $('.js-hamburger').removeClass("is-active");
      $(".header__inner").removeClass("clicked"); // ヘッダーの背景色を元に戻すためにクラスを削除
      $(".js-sp-nav").fadeOut(300);
      $("body").removeClass("active"); // 背景固定を解除する
    } else {
      $('.js-hamburger').addClass("is-active");
      $(".js-sp-nav").fadeIn(300);
      $(".header__inner").addClass("clicked"); // ヘッダーの背景色を変更するためにクラスを追加
      $("body").addClass("active"); // 背景固定を適用する
    }
  });

  // ドロワーメニュー内の <a> タグをクリックする際の処理
  $(".js-sp-nav a").click(function () {
    $(".js-hamburger").removeClass("is-active"); // ハンバーガーアイコンの状態を元に戻す
    $(".js-sp-nav").fadeOut(300, function () {
      $(".header__inner").removeClass("clicked"); // ヘッダーの背景色を元に戻すためにクラスを削除
      $("body").removeClass("active"); // 背景固定を解除する
    });
  });

  // ドロワーメニュー時背景固定
  $(".js-hamburger").click(function () {
    $(this).toggleClass("active");
    $(".js-sp-nav").toggleClass("active");
    $("body").toggleClass("active");
  });

  // mvスライダー ------------------------------------------
  var fadeswiper = new Swiper(".js-mv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000
    }
  });

  // カードスライダー ------------------------------------------
  var slideswiper = new Swiper(".js-campaign-swiper", {
    loop: true,
    // slidesPerView: getSlidesPerView(),
    slidesPerView: "auto",
    spaceBetween: 40,
    // centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
    speed: 3000,
    effect: "slide",
    navigation: {
      nextEl: '.swiper-button-next',
      // 次へボタンのセレクタ
      prevEl: '.swiper-button-prev' // 戻るボタンのセレクタ
    }
  });

  function getSlidesPerView() {
    if (window.innerWidth <= 767) {
      return 1.2;
    } else {
      return 3;
    }
  }

  // スライド用のswiperインスタンスを作成
  // var slideswiper = new Swiper('.swiper-container', {
  //   // 他の設定オプションをここに設定
  // });

  function updateSwiperOnResize() {
    slideswiper.params.slidesPerView = getSlidesPerView();
    slideswiper.update();
  }

  // ページ読み込み時に実行
  // updateSwiperOnResize();

  // 画面サイズ変更時にスライダーを更新
  // window.addEventListener('resize', updateSwiperOnResize);

  // 背景から画像が出る-------------------------------------------
  var EffectH = 100;
  $(window).on('scroll load', function () {
    var scTop = $(this).scrollTop();
    var scBottom = scTop + $(this).height();
    var effectPos = scBottom - EffectH;
    $('.js-scroll').each(function () {
      var thisPos = $(this).offset().top;
      if (thisPos < effectPos) {
        // .js-scrollという要素が可視範囲に入ったら
        $.when(
        // .js-scrollにshowというclassを付与
        $(this).addClass("show")).done(function () {
          //  その後、0.5秒遅らせて.js-scrollにdoneというclassを付与
          $(this).delay(500).queue(function () {
            $(this).addClass("done");
          });
        });
      }
    });
  });

  // $(document).ready(function () {
  //   // タブpage-campaign・page-voice ------------------------------------------
  //   var newsLink = $(".js-campaign__link,.js-voice__link li");
  //   var limit = 4;
  //   var $campaignContent = $(".js-campaign-content,.js-voice-content");

    
  //   // 最初の4つのコンテンツを表示
  //   $campaignContent.slice(0, limit).fadeIn();
  //   $(newsLink).click(function () {
  //     $(newsLink).removeClass("active");
  //     $(this).addClass("active");
  //     var btnFilter = $(this).attr('data-filter');
  //     if (btnFilter === 'catAll') {
  //       // 全てのコンテンツを非表示
  //       $campaignContent.css('display', 'none');
  //       // 最初の4つのコンテンツを表示
  //       $campaignContent.slice(0, limit).fadeIn();
  //     } else {
  //       // 特定のカテゴリのコンテンツを非表示
  //       $campaignContent.css('display', 'none');
  //       // 選択されたカテゴリのコンテンツを表示
  //       $campaignContent.filter('[data-category="' + btnFilter + '"]').fadeIn();
  //     }
  //   });
  // });
});

// タブpage-information ------------------------------------------
// jQuery(function ($) {
//   $('.js-tab-menu').on('click', function () {
//     $('.js-tab-menu').removeClass('is-active');
//     $('.js-tab-content').removeClass('is-active');
//     $(this).addClass('is-active');
//     var number = $(this).data("number");
//     $('#' + number).addClass('is-active');

//     // タブの色を変更
//     $('.information-tab__menu-item').removeClass('is-active'); // すべてのタブから 'is-active' クラスを削除
//     $(this).addClass('is-active'); // クリックされたタブに 'is-active' クラスを付ける
//   });


//   var footerTabList = $(".js-tab-list");
//   footerTabList.on("click", function () {
//     var targetTab = $(this).data("tab");

//     // フッタータブがクリックされた際に、ページタブとページコンテンツを連動させる処理を追加
//     var matchingPageTab = $('.js-tab-menu[data-tab="' + targetTab + '"]');
//     if (matchingPageTab.length > 0) {
//       matchingPageTab.addClass("is-active");

//       // 対応するコンテンツも表示する
//       var matchingPageContent = $(
//         '.js-tab-content[data-number="' + targetTab + '"]'
//       );
//       if (matchingPageContent.length > 0) {
//         matchingPageContent.addClass("is-active");
//       }
//     }
//   });

//   // URLからクエリパラメータを取得
//   var params = new URLSearchParams(window.location.search);
//   var targetTab = params.get("tab");

//   // クエリパラメータが存在する場合は、該当のタブを表示する
//   if (targetTab) {
//     // クリックイベントをトリガーして実行
//     $('[data-number="' + targetTab + '"]').trigger("click");
//   }
// });

jQuery(function ($) {
  $('.js-tab-menu').on('click', function () {
    $('.js-tab-menu').removeClass('is-active');
    $('.js-tab-content').removeClass('is-active');
    $(this).addClass('is-active');
    var number = $(this).data("number");
    $('#' + number).addClass('is-active');

    // タブの色を変更
    $('.information-tab__menu-item').removeClass('is-active'); // すべてのタブから 'is-active' クラスを削除
    $(this).addClass('is-active'); // クリックされたタブに 'is-active' クラスを付ける

    // タブ02またはタブ03がクリックされた場合、タブ01のis-showを削除する
    if (number === 'tab02' || number === 'tab03') {
      $('#tab01').removeClass('is-show');
    }
  });


  var footerTabList = $(".js-tab-list");
  footerTabList.on("click", function () {
    var targetTab = $(this).data("tab");

    // フッタータブがクリックされた際に、ページタブとページコンテンツを連動させる処理を追加
    var matchingPageTab = $('.js-tab-menu[data-tab="' + targetTab + '"]');
    if (matchingPageTab.length > 0) {
      matchingPageTab.addClass("is-active");

      // 対応するコンテンツも表示する
      var matchingPageContent = $(
        '.js-tab-content[data-number="' + targetTab + '"]'
      );
      if (matchingPageContent.length > 0) {
        matchingPageContent.addClass("is-active");
      }
    }
  });

  // URLからクエリパラメータを取得
  var params = new URLSearchParams(window.location.search);
  var targetTab = params.get("tab");

  // クエリパラメータが存在する場合は、該当のタブを表示する
  if (targetTab) {
    // クリックイベントをトリガーして実行
    $('[data-number="' + targetTab + '"]').trigger("click");
  }
});


// faq アコーディオン------------------------------------------

// jQuery(function ($) {
//   $('.js-faq-question').on('click', function () {
//     $(this).next().slideToggle();
//     $(this).toggleClass('is-open');
//   });
// });

jQuery(function ($) {
  $(".faq-list__item:first-of-type .faq-list__item-answer").css("display", "block");
  $(".faq-list__item:first-of-type .faq-list__item-question").addClass("is-open");
  $(".faq-list__item-question").on("click", function () {
    $(this).next().slideToggle(200);
    $(this).toggleClass("is-open", 200);
  });
});

// about モーダル------------------------------------------

jQuery(function ($) {
  $(".js-modal-open").each(function () {
    $(this).on("click", function (e) {
      e.preventDefault();
      var target = $(this).data("target");
      var modal = document.getElementById(target);
      $(modal).fadeIn();
      $("html,body").css("overflow", "hidden");
    });
  });
  $(".js-modal-close").on("click", function () {
    $(".js-modal").fadeOut();
    $("html,body").css("overflow", "initial");
  });
});

// 三角開閉２------------------------------------------

document.addEventListener("DOMContentLoaded", function () {
  var yearLinks = document.querySelectorAll('.js-year');
  yearLinks.forEach(function (yearLink) {
    yearLink.addEventListener('click', function () {
      this.classList.toggle('active');
      var categoryItems = this.nextElementSibling;
      // categoryItemsが存在するかどうかを確認
      if (categoryItems && (categoryItems.style.display === 'none' || categoryItems.style.display === '')) {
        categoryItems.style.display = 'block';
      } else if (categoryItems) {
        categoryItems.style.display = 'none';
      }
    });
  });
});

// footer price スクロール位置------------------------------------------
// jQuery(function ($) {
//   // #から始まるアンカータグをクリックしたら処理を実行
//   $('a[href^="#"]').click(function () {
//     // スクロールの速度（ミリ秒）
//     const speed = 500;
//     // アンカーの値取得（リンク先<href>を取得して、hrefという変数に代入）
//     const href = $(this).attr("href");
//     // 移動先を取得（リンク先<href>のidがある要素を探してtargetに代入）
//     const target = $(href == "#" || href == "" ? "html" : href);
//     // 移動先を調整(idの要素の位置をoffset()で取得しpositionに代入<ヘッダー分は差し引く>）
//     const position = target.offset().top - $('#js-header').outerHeight();
//     // スムーススクロール
//     $("html, body").animate({ scrollTop: position }, speed, "swing");
//     return false;
//   });
// });