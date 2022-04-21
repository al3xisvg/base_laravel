require('./bootstrap');

require('datatables.net-bs4');
require('datatables.net-buttons-bs4');

$(() => {
  var eyeVisible = $('#eye-visible');
  var eyeHidden = $('#eye-hidden');
  var inpPassword = $('#password');

  eyeVisible.show();
  eyeHidden.hide();

  eyeVisible.on('click', () => {
    eyeVisible.hide();
    eyeHidden.show();
    inpPassword.attr('type', 'text');
  })

  eyeHidden.on('click', () => {
    eyeVisible.show();
    eyeHidden.hide();
    inpPassword.attr('type', 'password');
  })
});