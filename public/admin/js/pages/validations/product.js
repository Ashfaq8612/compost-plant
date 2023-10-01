$(function () {
  'use strict';

    var jqForm = $('#product-form'),
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
        /*'brand_id': {
          required: true
        },*/
          /*'category_id[]': {
          required: true
        },*/
          'en_name': {
          required: true
        },
        'ar_name': {
          required: true
        },
          'en_description': {
              required: true
          },
          'ar_description': {
              required: true
          },
          'sku': {
              required: true
          },
          'price': {
              required: true
          },
          'qty': {
              required: true
          },
        'slug': {
          required: true
        },
        'file': {
          required: isEditable
        }
      }
    });
  }
});
