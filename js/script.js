// スムーススクロールの設定
$(function () {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^="#"]')
    .not('.class')
    .not('#js-tab-menu a')
    .click(function () {
      // スクロールの速度
      var speed = 200; // ミリ秒
      // アンカーの値取得
      var href = $(this).attr('href');
      // 移動先を取得
      var target = $(href == '#' || href == '' ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top - 100;
      // スムーススクロール
      $('body,html').animate({ scrollTop: position }, speed, 'swing');
      return false;
    });
});

// 360px以下のviewportの設定
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();

// humburger menu 開閉
$(function () {
  $('#js-hamburger__toggle').on('click', function () {
    $('#js-hamburger__toggle').toggleClass('is-active');
    $('.l-spMenu').toggleClass('is-active');
  });
});

// spMenu 開閉
$(function () {
  $('.l-spMenu__closeToggle').on('click', function () {
    $('#js-hamburger__toggle').toggleClass('is-active');
    $('.l-spMenu').toggleClass('is-active');
  });
});

// ローディングアニメーション
$(window).on('load', function () {
  $('body').addClass('js-blur appear'); //ローディング後、bodyにappear,js-blurクラス付与
});

$(window).on('scroll', function () {
  $('body').css('animation-name', 'unset');
  //フェードアウト後、bodyのanimation-nameを「unset」に
  // header,copyのposition:fixed;を機能させるため
});

// プライバシーポリシーに同意しなければ送信ボタンが機能しない設定
$(document).ready(function () {
  const $submitBtn = $('#js-submit');
  $('input,textarea').on('change', function () {
    if (
      $('input[type="text"]').val() !== '' &&
      $('input[type="radio"]').val() !== '' &&
      $('input[type="email"]').val() !== '' &&
      $('input[type="checkbox"]').val() !== '' &&
      $('#agree-1').prop('checked') === true
    ) {
      $submitBtn.prop('disabled', false);
    } else {
      $submitBtn.prop('disabled', true);
    }
  });
});

// scroll-hintのレスポンシブ対応(1024px以降は挙動なし)
if (window.matchMedia('(max-width: 1023px)').matches) {
  /* ウィンドウサイズが 1023px以下の場合のコードをここに */
} else {
  /* ウィンドウサイズが 1024px以上の場合のコードをここに */
  $('#js-scrollable').removeClass('js-scrollable');
}
