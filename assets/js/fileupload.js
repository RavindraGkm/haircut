//Reference:
//http://www.onextrapixel.com/2012/12/10/how-to-create-a-custom-file-input-with-jquery-css3-and-php/
;
(function ($) {

  // Browser supports HTML5 multiple file?
  var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
    isIE = /msie/i.test(navigator.userAgent);

  $.fn.customFile = function () {

    return this.each(function () {

      var $file = $(this).addClass('custom-file-upload-hidden'),
        $wrap = $('<div class="file-upload-wrapper">'),
        $input = $('<input type="text" class="file-upload-input" />'),
        $button = $('<button type="button" class="file-upload-button">Select a File</button>'),
        $label = $('<label class="file-upload-button" for="' + $file[0].id + '">Select a File</label>');
      $file.css({
        position: 'absolute',
        left: '-9999px'
      });

      $wrap.insertAfter($file).append($file, $input, ( isIE ? $label : $button ));
      $file.attr('tabIndex', -1);
      $button.attr('tabIndex', -1);
      $button.click(function () {
        $file.focus().click(); // Open dialog
      });
      $file.change(function () {
        var files = [], fileArr, filename;
        if (multipleSupport) {
          fileArr = $file[0].files;
          for (var i = 0, len = fileArr.length; i < len; i++) {
            files.push(fileArr[i].name);
          }
          filename = files.join(', ');
        }
        else {
          filename = $file.val().split('\\').pop();
        }

        $input.val(filename) // Set the value
          .attr('title', filename) // Show filename in title tootlip
          .focus(); // Regain focus
      });

      $input.on({
        blur: function () {
          $file.trigger('blur');
        },
        keydown: function (e) {
          if (e.which === 13) { // Enter
            if (!isIE) {
              $file.trigger('click');
            }
          } else if (e.which === 8 || e.which === 46) { // Backspace & Del
            // On some browsers the value is read-only
            // with this trick we remove the old input and add
            // a clean clone with all the original events attached
            $file.replaceWith($file = $file.clone(true));
            $file.trigger('change');
            $input.val('');
          } else if (e.which === 9) { // TAB
            return;
          } else { // All other keys
            return false;
          }
        }
      });

    });

  };

  // Old browser fallback
  if (!multipleSupport) {
    $(document).on('change', 'input.customfile', function () {

      var $this = $(this),
      // Create a unique ID so we
      // can attach the label to the input
        uniqId = 'customfile_' + (new Date()).getTime(),
        $wrap = $this.parent(),

      // Filter empty input
        $inputs = $wrap.siblings().find('.file-upload-input')
          .filter(function () {
            return !this.value
          }),

        $file = $('<input type="file" id="' + uniqId + '" name="' + $this.attr('name') + '"/>');

      // 1ms timeout so it runs after all other events
      // that modify the value have triggered
      setTimeout(function () {
        // Add a new input
        if ($this.val()) {
          // Check for empty fields to prevent
          // creating new inputs when changing files
          if (!$inputs.length) {
            $wrap.after($file);
            $file.customFile();
          }
          // Remove and reorganize inputs
        } else {
          $inputs.parent().remove();
          // Move the input so it's always last on the list
          $wrap.appendTo($wrap.parent());
          $wrap.find('input').focus();
        }
      }, 1);

    });
  }

}(jQuery));