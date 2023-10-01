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

    var jqForm = $('#coupon-form');

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
        'code': {
          required: true
        },
          'value': {
          required: true
        },
          'start_date': {
          required: true
        },
          'end_date': {
          required: true
        },
      }
    });
  }
});
