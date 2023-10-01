/*=========================================================================================
  File Name: form-validation.js
  Description: jquery bootstrap validation js
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
  'use strict';

    var jqForm = $('#user-form');

  // jQuery Validation
  // --------------------------------------------------------------------
  if (jqForm.length) {
      let isEditable = true;
      if (typeof isEdit !== 'undefined' && isEdit === true) {
          isEditable = false;
      }

      if (typeof isEdit !== 'undefined' && isEdit === false) {
          isEditable = true;
      }

    jqForm.validate({
      rules: {
        'en_name': {
          required: true
        },
        'ar_name': {
          required: true
        },
        'email': {
          required: true
        },
         'role_id': {
          required: true
        },
         'password': {
              required: true
          },
          'confirm_password': {
              required: true
          },
      }
    });
  }
});
