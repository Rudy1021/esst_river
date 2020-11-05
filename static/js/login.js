$(document).on('click', '.back', function() {
  $('.defaultSignup').hide();
  $('.signup-footer').hide();
  $('.defaultScreen').show();
  $('.login-footer').show();
});


$(document).on('click', '.defaultSignup-btn', function() {
  $('.defaultScreen').hide();
  $('.otherLogin').hide();
  $('.login-footer').hide();
  $('.defaultSignup').show();
  $('.signup-footer').show();
  $('.back').prop('id', 'default');
});


$('input').keypress(function(e) {
  code = (e.keyCode ? e.keyCode : e.which);
  if (code == 13) {
    $('.login_btn').click();
  }
});


$(document).on('click', '.captcha', function() {
  $(this).prop('src', 'captcha.php');
});


$(document).on('click', '.signup-btn', function() {
  signUp();
});


$(document).on('click', '.login_btn', function() {
  if ($('.userId').val() != '' &&
  $('.userPassword').val() != '' &&
  $('.checkcode').val() != '') {
    code = checkCaptcha();
    if (code == 'success') {
      login();
    } else if (code == 'fail') {
      $.confirm({
        title: '錯誤！',
        animation: 'zoom',
        closeAnimation: 'scale',
        content: '驗證碼錯誤！',
        buttons: {
          確認: {
            btnClass: 'btn-success',
            action: function() {
            },
          },
        },
      });
    }
  } else {
    $.confirm({
      title: '錯誤！',
      animation: 'zoom',
      closeAnimation: 'scale',
      content: '有欄位未填！',
      buttons: {
        確認: {
          btnClass: 'btn-success',
          action: function() {
          },
        },
      },
    });
  }
});

/**
 * 驗證碼function
 * @return {string} code 回傳成功或失敗
 */
function checkCaptcha() {
  code = '';
  dataCheck = {
    checkword: $('.checkcode').val(),
  };
  $.ajax({
    type: 'POST',
    url: 'checkcode.php',
    data: dataCheck,
    async: false,
    success: function(response) {
      if (response == '成功') {
        code = 'success';
      } else if (response == '錯誤') {
        code = 'fail';
      }
    },
  });
  return code;
}


/**
 * 登入function
 */
function login() {
  dataLogin = {
    userId: $('.userId').val(),
    userPassword: $('.userPassword').val(),
    type: 'login',
  };
  $.ajax({
    type: 'POST',
    url: 'ajax.php',
    data: dataLogin,
    success: function(response) {
      console.log(response)
      if (response == '帳號或密碼錯誤') {
        $.confirm({
          title: '錯誤！',
          animation: 'zoom',
          closeAnimation: 'scale',
          content: '帳號或密碼錯誤！',
          buttons: {
            確認: {
              btnClass: 'btn-success',
              action: function() {
              },
            },
          },
        });
      } else if (response == 'success') {
        location.href = 'mileage.php';
      }
    },
  });
}


/**
 * 註冊function
 */
function signUp() {
  dataSignup = {
    userId: $('.userId').val(),
    userPassword: $('.userPassword').val(),
    phone: $('.phone').val(),
    userName: $('.userId').val(),
    type: 'signup',
  };
  $.ajax({
    type: 'POST',
    url: 'ajax.php',
    data: dataSignup,
    success: function(response) {
      console.log(response);
      if (response == '已有此帳號') {
        $.confirm({
          title: '錯誤！',
          animation: 'zoom',
          closeAnimation: 'scale',
          content: '已有此帳號！',
          buttons: {
            確認: {
              btnClass: 'btn-success',
              action: function() {},
            },
          },
        });
      } else if (response == '成功') {
        $.confirm({
          title: '成功！',
          animation: 'zoom',
          closeAnimation: 'scale',
          content: '註冊成功！',
          buttons: {
            確認: {
              btnClass: 'btn-success',
              action: function() {
                location.reload();
              },
            },
          },
        });
      }
    },
  });
}
