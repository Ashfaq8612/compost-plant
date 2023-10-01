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

    var jqForm = $('#validation-form'),
        select = $('.select2');

  // select2
  select.each(function () {
    var $this = $(this);
    $this.wrap('<div class="position-relative"></div>');
    $this
      .select2({
        placeholder: 'Select value',
        dropdownParent: $this.parent()
      })
      .change(function () {
        $(this).valid();
      });
  });

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
        'slug': {
          required: true
        },
          'parent_id': {
              required: true
          }
      }
    });
  }
});
