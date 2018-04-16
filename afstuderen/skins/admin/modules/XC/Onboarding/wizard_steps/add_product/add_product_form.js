/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Add product form
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('form_model/type/product/simplified', ['js/vue/vue', 'form_model'], function (XLiteVue) {
  XLiteVue.component('xlite-form-model', {
    computed: {
      optionsUrl: {
        cache: false,
        get: function () {
          var url = URLHandler.buildURL({
            'target': 'product'
          });

          var data = this.form['default'];

          return url + '&' + jQuery.param({
            'prefill': {
              'name': data.name,
              'price': data.price,
              'image': {
                'temp_id': data.images.temp_id,
                'alt': data.images.alt
              }
            }
          });
        }
      }
    },

    events: {
      'file-uploader-overlay': function (sender) {
        sender.getFileUploaderElement().html('<div class="spinner"></div>');
      },
    },

    methods: {
      onSubmit: function (event) {
        event.preventDefault();

        if (!this.changed) {
          this.onSkip();
          return;
        }

        this.$options.methods.onSubmit.parent.apply(this, arguments);
        if (!this.$form.invalid) {
          this.$dispatch('blockBody');
          core.post(
            $(this.$el).attr('action'),
            null,
            $(this.$el).serialize(),
            {
              rpc: true
            })
            .done(_.bind(this.onSaveSuccess, this))
            .fail(_.bind(this.onSaveFail, this));
        }
      },

      onSkip: function () {
        this.$dispatch('form.submit.skip');
      },

      onSaveSuccess: function (data, textStatus, jqXHR) {
        this.$dispatch('form.submit.success', data);
        this.reset();
      },

      onSaveFail: function (jqXHR, textStatus, errorThrow) {
        var data = JSON.parse(jqXHR.responseText);
        this.handleErrors(data);
        this.$dispatch('form.submit.fail', data, textStatus);
      },

      handleErrors: function (data) {
        console.log(data);
      }
    }
  });
});