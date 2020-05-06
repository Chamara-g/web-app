
function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if( !emailReg.test( email ) || email.length == 0) {
        return false;
    } else {
        return true;
    }
}

  $('#footer_button_click').click(function (){
      
      sub_email = $('.subscribe_mail').val();
      sub_name = $('.subscribe_name').val();

      if( sub_name.length <= 0 ){
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Please enter valid name !',
          showConfirmButton: false,
          timer: 2500
        });
      }
      else if( sub_name.length >= 20 ){
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Please enter name smaller than 20 characters !',
          showConfirmButton: false,
          timer: 2500
        });
      } 
      else if( sub_email.length >= 30 ){
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Please enter Email smaller than 30 characters !',
          showConfirmButton: false,
          timer: 2500
        });
      }            
      else if(!validateEmail(sub_email)){
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Please enter valid email !',
          showConfirmButton: false,
          timer: 2500
        });
      }
      else{
        $.ajax({
            url: 'contactform/subscribe_mail.php',
            type: 'POST',
            data: {
                subscribe_click: 'submit',
                subscribe_name: sub_name,
                subscribe_email: sub_email
            },
            success: function(msg) {
              if( msg == 'ok'){
                $('#footer_button_click').attr("disabled", true);
                $('#footer_button_click').css('opacity', '0.6');

                $('.subscribe_name').val('');
                $('.subscribe_mail').val('');

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
      }

  });

  $('#subscribe_click').click(function (){
      
      sub_email = $('.subscribe_email_middle').val();

      if( sub_email.length >= 30 ){
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Please enter Email smaller than 30 characters !',
          showConfirmButton: false,
          timer: 2500
        });
      }            
      else if(!validateEmail(sub_email)){
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Please enter valid email !',
          showConfirmButton: false,
          timer: 2500
        });
      }
      else{
        $.ajax({
            url: 'contactform/subscribe_mail.php',
            type: 'POST',
            data: {
                subscribe_click: 'submit',
                subscribe_name: '',
                subscribe_email: sub_email
            },
            success: function(msg) {
              if( msg == 'ok' ){
                $('#subscribe_click').attr("disabled", true);
                $('#subscribe_click').css('opacity', '0.6');

                $('.subscribe_email_middle').val('');

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
      }

  });
