require('./bootstrap');
jQuery('#flash-overlay-modal').modal();
jQuery('div.alert').not('.alert-important').delay(3000).fadeOut(350);