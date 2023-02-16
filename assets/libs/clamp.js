/*
 * jQuery Shorten plugin 1.0.0
 *
 * Copyright (c) 2013 Viral Patel
 * //www.viralpatel.net
 *
 * Dual licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 */

(function ($) {
    $.fn.shorten = function (settings) {

        let config = {
            showChars: 100,
            ellipsesText: "...",
            moreText: "more",
            lessText: "less",
            isReviews: false,
        };

        if (settings) {
            $.extend(config, settings);
        }

        $(document).off("click", '.hidden-block__text');

        $(document).on({
            click: function () {
                if( !$(this).hasClass("shortened") ) return false

                $(this).parents(".hidden-block").toggleClass("hidden-block_active")

                return false;
            }
        }, '.hidden-block__text');

        return this.each(function () {
            let $this = $(this);
            if ($this.hasClass("shortened")) return;

            let content = $this.html();
            if ($this[0].scrollHeight > $this.height()) {
                $this.addClass("shortened");

                let initialContent = content.substr(0, config.showChars);
                let moreContent = content.substr(config.showChars, content.length - config.showChars);
                let html = `${initialContent}<span class="moreellipses">${config.ellipsesText}</span><span class="morecontent">${moreContent}</span>`;

                $this.html(html);
            }
        });

    };

})(jQuery);