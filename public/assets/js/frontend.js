function getCsrfToken(){
  return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
}

function showLoader(){

}

function hideLoader(){
  
}

function displayErrorText(obj, msg){
  $(obj).text(msg);
}


function removeFormErrorText(){
  $('.form-error').text('');
}

function displayFormErrorText(fieldObj, err){
  $(fieldObj).next('span.form-error').text(err);
}

function hideSessionMessages(){
  if($('.page-messages').length){
      $(".page-messages").delay(5000).fadeOut(800);
  }
}

const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
}

const validatePhone = (phone) => {
  return phone.match(
      /^\+[1-9]{1}[0-9]{1,14}$/
  );
}


$(document).ready(function(){

  $(document).on('keyup', 'form .input-phone-validation', function(){
    const sanitizedValue = this.value.replace(/[^\d]/g, '');

    // Update the input value with the sanitized value
    this.value = sanitizedValue;
  });

  $(document).on('click', '.enquiry-form .enquiry-form-submit-button', function(){
    removeFormErrorText();
    let formError = false;
    let formEle = $(this).closest('form');
    // let formErrorObj = $(this).find('.form-error-msg');
    let formName = $(formEle).attr('name');
    let nameObj = document.forms[formName]['name'];
    let emailObj = document.forms[formName]['email'];
    let phoneObj = document.forms[formName]['phone'];
    let messageObj = document.forms[formName]['message'];

    if( nameObj.value == ''){
      formError = true;
      displayFormErrorText(nameObj, 'Name is required');
    }
    if( emailObj.value == ''){
        formError = true;
        displayFormErrorText(emailObj, 'Email is required');
    } else if( !validateEmail(emailObj.value) ){
        formError = true;
        displayFormErrorText(emailObj, 'Email is invalid');
    }
    if( phoneObj.value == ''){
        formError = true;
        displayFormErrorText(phoneObj, 'Phone is required');
    } else {
      if(phoneObj.value.length != 10){
        formError = true;
        displayFormErrorText(phoneObj, 'Phone is invalid');
      }
    }
    if( messageObj.value == ''){
      formError = true;
      displayFormErrorText(messageObj, 'Message is required');
    }


    if( formError == false){
      showLoader();
      let request_url = $(formEle).attr('action');
      let request_method = (formEle).attr('method');
      let formData = new FormData(document.forms[formName]);
      let redirect_url = '';

      $.ajax({
          url: request_url,
          data: formData,
          type: request_method,
          processData: false,
          contentType: false,
          success: function(response){
              hideLoader();
              let res =  JSON.parse(response);

              if(res.status=='success'){
                  // alert(res.message);
                  // window.location.reload();
                  window.location.href= res.data;
              } else {
                  // displayErrorText(formErrorObj, res.message);
                  alert(res.message);
              }

          },
          error: function (jqXHR, exception) {
              hideLoader();
              console.log('Try again later.');
          },
      }); // end $.ajax
    }

    return false;
  })

})