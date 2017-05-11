var positions = JSON.parse(localStorage.positions || '{}')
jQuery(document).ready(function ($) {
  $(function () {
    var btnPlugin = '.btn__plugin'
    $(btnPlugin).attr('id', function (i) {
      return 'draggable_' + i
    })
    $.each(positions, function (id, pos) {
      $('#' + id).css(pos)
    })
    $(btnPlugin).draggable({
      containment: 'body',
      scroll: false,
      stop: function (event, ui) {
        positions[this.id] = ui.position
        localStorage.positions = JSON.stringify(positions)
      }
    })
    var hiddenElement = $('#wpadminbar, .wp-toolbar, html')
    var isHiddenElement = localStorage.getItem('hide_bar__plugin')
    var showText = $('.text-show__plugin')
    var hideText = $('.text-hide__plugin')

    $(btnPlugin).on('click', function () {
      isHiddenElement = isHiddenElement ? false : true
      localStorage.setItem('hide_bar__plugin', isHiddenElement)
      isHidden()
    })
    function isHidden() {
      if (isHiddenElement == true || isHiddenElement == 'true') {
        hiddenElement.addClass('hide-bar__plugin')
        showText.removeClass('change-text__plugin')
        hideText.addClass('change-text__plugin')
      } else {
        hiddenElement.removeClass('hide-bar__plugin')
        showText.addClass('change-text__plugin')
        hideText.removeClass('change-text__plugin')
      }
    }
    isHidden()
  })
})
