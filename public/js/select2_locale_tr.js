/**
 * Select2 Turkish translation.
 * 
 * Author: Salim KAYABAŞI <salim.kayabasi@gmail.com>
 */
(function ($) {
    "use strict";

    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "Nəticə tapılmadı"; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "Ən az " + n + " sayda hərf daxil etməlisiniz"; },
        formatInputTooLong: function (input, max) { var n = input.length - max; return n + " sayda hərf azaltmalısınız"; },
        formatSelectionTooBig: function (limit) { return "Sadəcə " + limit + " seçim edə bilərsiniz"; },
        formatLoadMore: function (pageNumber) { return "Daha artıq..."; },
        formatSearching: function () { return "Axtarılır..."; }
    });
})(jQuery);
