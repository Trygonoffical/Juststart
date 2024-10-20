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
  $('.field-error').text('');
}

function displayFormErrorText(fieldObj, err){
  $(fieldObj).next('span.field-error').text(err);
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

function isImage(filename) {
  let f_ext = getFileExtension(filename);
  switch (f_ext.toLowerCase()) {
      case 'jpg':
      case 'jpeg':
      //case 'gif':
      //case 'bmp':
      case 'png':
      //etc
      return true;
  }
  return false;
}

$(function() {
  hideSessionMessages();

})