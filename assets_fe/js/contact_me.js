$('#contact-form').ajaxForm({
    beforeSend: function() {
        $('.send-btn').hide();
        $('.loading').show();
    },
    // dataType identifies the expected content type of the server response
    dataType:  'json',
    // success identifies the function to invoke when the server response
    // has been received
    success:   validate_ajax_form
});

function validate_ajax_form(data) {

  $('.contact_msg_error').fadeOut();
  $('.send-btn').show();
  $('.loading').hide();
  
  if(!data.valid)
  {
    $.each(data.errors, function(key, value) {

      if(value)
        $('#contact_error_' + key ).html( value ).fadeIn();
    });
  }
  else
  {
    $('#contact-container').hide().html('<div class="alert alert-success">Gracias por contactarte con Nosotros. Dentro de las próximas 24 a 48hs estaremos respondiendo su consulta. Por favor tenga presente, si no recibe nuestra respuesta en dicho plazo, revisar su bandeja de correos no deseados (Spam).</div>').fadeIn();
  }
};
