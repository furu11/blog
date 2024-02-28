$(function() {

  var signInButtons = document.querySelectorAll('.signin._click, .sp_signin._click');
  var modal = document.getElementById('modal');
  
  signInButtons.forEach(function(signInButton) {
    signInButton.addEventListener('click', function() {
      var signInBox = document.getElementById('signin_box');
      signInBox.style.display = 'block';
      modal.style.display = 'block';
    });
  });

// 非表示の設定
var overlay = document.getElementById('overlay');
var submitBtn = document.querySelector("#signin_box button[type='submit']");
var closeBtns = document.querySelectorAll(".sns button");
var images = document.querySelectorAll(".sns img");
overlay.addEventListener('click', function(event) {
  if (event.target === overlay || event.target === submitBtn || isContainedInArray(event.target, closeBtns) || isContainedInArray(event.target, images)) {
    var signInBox = document.getElementById('signin_box');
    signInBox.style.display = 'none';
    modal.style.display = 'none';
    // メールアドレスとパスワードをリセット
    var emailInput = document.getElementById('email_input');
    var passwordInput = document.getElementById('password_input');
    emailInput.value = '';
    passwordInput.value = '';
    
  }
});

// 非表示のボタンの要素を繰り返して取得
function isContainedInArray(target, array) {
  for (var i = 0; i < array.length; i++) {
    if (target === array[i] || target.parentNode === array[i]) {
      return true;
    }
  }
  return false;
}

// サインインのメースアドレス、パスワードのエンターキー処理
var Input = document.querySelectorAll("#signin_box input");
// input要素が存在する場合のみ処理を実行
if (Input.length > 0) {
  Input.forEach(function(input) {
    input.addEventListener('keydown', function(event) {
      if (event.keyCode === 13) {
        // トップページに戻る
        input.value = '';
        var signInBox = document.getElementById('signin_box');
        signInBox.style.display = 'none';
        modal.style.display = 'none';

        // メールアドレスとパスワードをリセット
        var emailInput = document.getElementById('email_input');
        var passwordInput = document.getElementById('password_input');
        emailInput.value = '';
        passwordInput.value = '';
      }
    });
  });
}

// ヘッダースクロール時の処理
window.addEventListener('scroll', function() {
  var header = document.querySelector('header');
  var nav = header.querySelector('nav');
  var element = document.querySelector('heads');
  var sp_nav = document.querySelector('.sp-nav'); // 追加
  var top = window.pageYOffset || document.documentElement.scrollTop;
  var elementTop = element.getBoundingClientRect().top;

  if (elementTop <= 0) {
    // 要素の上端がウィンドウの上端に当たった場合
    header.classList.add('motion');
    nav.classList.add('motion');
    sp_nav.classList.add('motion'); // 追加
  } else {
    header.classList.remove('motion');
    nav.classList.remove('motion');
    sp_nav.classList.remove('motion'); // 追加
  }
});

var spMenu = document.querySelector('.sp');
var spNav = document.querySelector('.sp_nav');

// 最初は spNav を非表示にする
spNav.style.display = 'none';

// クリックイベントを追加
spMenu.addEventListener('click', function() {
  // spNavの表示状態を切り替える
  if (spNav.style.display === 'block') {
    spNav.style.display = 'none';
  } else {
    spNav.style.display = 'block';
  }
});

spNav.addEventListener('click', function(event) {
  var target = event.target;
  if (target.classList.contains('sp_menu') || target.classList.contains('sp_signin')) {
    spNav.style.display = 'none';
  }
});

// メニュー以外の場所をクリックした場合も spNav を非表示にする
document.addEventListener('click', function(event) {
  var target = event.target;
  if (!target.closest('.sp_nav') && !target.closest('.sp')) {
    spNav.style.display = 'none';
  }
});

});