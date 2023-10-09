$(document).ready(function () {

  new WOW().init();

});

function checkMail(mail){
    var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
    if(typeof(mail) == "string"){
      if(er.test(mail)){ return true; }
    }else if(typeof(mail) == "object"){
      if(er.test(mail.value)){ 
        return true; 
      }
    }else{
      return false;
    }
}

function EnviaEmail() {
    var n = $('#form-contato .required').length;
    var errors=0;

     $('#form-contato .required').each(function(i) {
      if ($(this).val() == '') {
        errors++;
        if (errors == 1) {
          $(this).focus();
        }
        $(this).addClass('error-form');
        $(this).removeClass('valide-form');
        $(this).next('.error').show();
      }else{
        $(this).removeClass('error-form');
        $(this).addClass('valide-form');
        $(this).next('.error').hide();
      }
     })

      if(checkMail($('#email').val())!=true){
          $('#email').addClass('error-form');
          $('#email').removeClass('valide-form');
          $('.error-email').show();          
          errors++;
      } else {
          $('#email').addClass('valide-form');
          $('#email').removeClass('error-form');
          $('.error-email').hide();          
      }      

    if (errors == 0) {
      var dados = $('#form-contato').serialize();
      
      $.ajax({
        type: 'POST',
        data: dados,
        url:'/wp-content/themes/ArteOficio/contato.php',
        success: function(){
          $('#form-contato').hide();
          $('#sucesso').show();

          dataLayer.push({ event: "Contato", eventCategory: "form", eventAction: "send"});
        }
      });
    } 
}

$('.menu-mobile').click(function(){
  $('#menu-mobile').fadeIn('slow');
})

$('.close').click(function(){
  $('.modal').fadeOut('slow');
})
