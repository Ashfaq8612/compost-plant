/*=========================================================================================
    File Name: pickers.js
    Description: Pick a date/time Picker, Date Range Picker JS
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
(function (window, document, $) {
  'use strict';

  /*******  Flatpickr  *****/
  var basicPickr = $('.flatpickr-basic'),
    timePickr = $('.flatpickr-time'),
    dateTimePickr = $('.flatpickr-date-time'),
    multiPickr = $('.flatpickr-multiple'),
    rangePickr = $('.flatpickr-range'),
    humanFriendlyPickr = $('.flatpickr-human-friendly'),
    disabledRangePickr = $('.flatpickr-disabled-range'),
    inlineRangePickr = $('.flatpickr-inline');

  // Default
  if (basicPickr.length) {
    basicPickr.flatpickr();
  }

  // Time
  if (timePickr.length) {
    timePickr.flatpickr({
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      noCalendar: true
    });
  }

  // Date & TIme
  if (dateTimePickr.length) {
    dateTimePickr.flatpickr({
      enableTime: true
    });
  }

  // Multiple Dates
  if (multiPickr.length) {
    multiPickr.flatpickr({
      weekNumbers: true,
      mode: 'multiple',
      minDate: 'today'
    });
  }

  // Range
  if (rangePickr.length) {
    rangePickr.flatpickr({
      mode: 'range'
    });
  }

  // Human Friendly
  if (humanFriendlyPickr.length) {
    humanFriendlyPickr.flatpickr({
      altInput: true,
      altFormat: 'F j, Y',
      dateFormat: 'Y-m-d'
    });
  }

  // Disabled Range
  if (disabledRangePickr.length) {
    disabledRangePickr.flatpickr({
      dateFormat: 'Y-m-d',
      disable: [
        {
          from: new Date().fp_incr(2),
          to: new Date().fp_incr(7)
        }
      ]
    });
  }

  // Inline
  if (inlineRangePickr.length) {
    inlineRangePickr.flatpickr({
      inline: true
    });
  }
  /*******  Pick-a-date Picker  *****/
  // Basic date
    if ($('.pickadate').length) {
        $('.pickadate').pickadate();
    }

  // Format Date Picker
    if ($('.format-picker').length) {
        $('.format-picker').pickadate({
            format: 'mmmm, d, yyyy'
        });
    }

  // Date limits
    if ($('.pickadate-limits').length) {
        $('.pickadate-limits').pickadate({
            min: [2019, 3, 20],
            max: [2019, 5, 28]
        });
    }

  // Disabled Dates & Weeks
    if ($('.pickadate-disable').length) {
        $('.pickadate-disable').pickadate({
            disable: [1, [2019, 3, 6], [2019, 3, 20]]
        });
    }

  // Picker Translations
    if ($('.pickadate-translations').length) {
        $('.pickadate-translations').pickadate({
            formatSubmit: 'dd/mm/yyyy',
            monthsFull: [
                'Janvier',
                'Février',
                'Mars',
                'Avril',
                'Mai',
                'Juin',
                'Juillet',
                'Août',
                'Septembre',
                'Octobre',
                'Novembre',
                'Décembre'
            ],
            monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
            weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
            today: "aujourd'hui",
            clear: 'clair',
            close: 'Fermer'
        });
    }

  // Month Select Picker
    if ($('.pickadate-months').length) {
        $('.pickadate-months').pickadate({
            selectYears: false,
            selectMonths: true
        });
    }

  // Month and Year Select Picker
    if ($('.pickadate-months-year').length) {
        $('.pickadate-months-year').pickadate({
            selectYears: true,
            selectMonths: true
        });
    }

})(window, document, jQuery);
