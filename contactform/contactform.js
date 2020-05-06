jQuery(document).ready(function($) {
  "use strict";

  //Contact
  $('form.contactForm').submit(function() {
    var f = $(this).find('.form-group'),
      ferror = false,
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    f.children('input').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;

          case 'email':
            if (!emailExp.test(i.val())) {
              ferror = ierror = true;
            }
            break;

          case 'checked':
            if (! i.is(':checked')) {
              ferror = ierror = true;
            }
            break;

          case 'regexp':
            exp = new RegExp(exp);
            if (!exp.test(i.val())) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    f.children('textarea').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    if (ferror) return false;
    else var str = $(this).serialize() + '&submit_click_val=ok';

    var action = $(this).attr('action');
    if( ! action ) {
      action = 'contactform/contactform.php';
    }

    $.ajax({
      type: "POST",
      url: action,
      data: str,
      success: function(msg) {
        if( msg == 'ok'){
          $('#submit').attr("disabled", true);
          $('#submit').css('opacity', '0.6');

          $('#name').val('');
          $('#email').val('');
          $('#subject').val('');
          $('.text-div-tag').val('');


          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Thank you for subscribe us !',
            showConfirmButton: false,
            timer: 2500
          });
        }
        else{
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Sorry something went wrong !',
            showConfirmButton: false,
            timer: 2500
          });
        }

      },
      error: function (request, status, error) {
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Sorry something went wrong !',
          showConfirmButton: false,
          timer: 2500
        });
      }       
    });
    return false;
  });

});
