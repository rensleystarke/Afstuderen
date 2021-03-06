/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

jQuery(function() {
  var heightFixer = function () {
    jQuery(this).addClass('notransition');

    if (this.scrollHeight > this.clientHeight) {
      this.style.height = (this.scrollHeight + 10) + 'px';
    }

    jQuery(this).removeClass('notransition');
  };

  jQuery('.footer-menu').collapser();
  jQuery('.form-control').floatingLabel();
  jQuery('textarea.form-control').keyup(heightFixer).keyup();

  core.bind('checkout.main.ready', function() {
  jQuery('.checkout_fastlane_container .form-control').floatingLabel();
  jQuery('.checkout_fastlane_container textarea.form-control').keyup(heightFixer).keyup();
  });

  core.bind(['load', 'loader.loaded', 'popup.open'], function() {
    jQuery('.form-control').floatingLabel();
    jQuery('textarea.form-control').keyup(heightFixer).keyup();
  });

});
