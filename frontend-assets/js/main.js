$(function() {
  $("#password-field").each(function (index, input) {
    var $input = $(input);
    $("button#show-hide").click(function () {
      var change = "";
      if ($(this).html() === "Show") {
        $(this).html("Hide")
        change = "text";
      } else {
        $(this).html("Show");
        change = "password";
      }

      $("#password-field").attr('type', change);
      $("#retype-password-field").attr('type', change);

    })
  });

  $("input#username-field").on('blur', function(e){
    var username = $('#username-field').val();
    formError(username, 'username');
  });

  $("input#email-field").on('blur', function(e){
    var email = $('#email-field').val();
    formError(email, 'email');
  });

  $("input#password-field").on('blur', function(e){
    var password = $('#password-field').val();
    formError(password, 'password');
  });

  $("input#retype-password-field").on('blur', function(e){
    var retype_password = $('#retype-password-field').val();
    formError(retype_password, 'retype-password');
  });

  function formError(fieldValue, form){
    if(fieldValue == ''){
      $('.'+form+'-form').removeClass('has-success').removeClass('has-error').addClass('has-error');
    } else {
      $('.'+form+'-form').removeClass('has-error').removeClass('has-success').addClass('has-success');
    }
  }

  function myFunction(){
    console.log('ceva');
  }
});