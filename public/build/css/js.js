(function($) {
    "use strict";
    $(document).ready(function() {
        $("#sidebarCollapse").on("click", function() {
            $("#sidebar").toggleClass("active");
        });
       
    });
    // ______________ PAGE LOADING
    $(window).on("load", function(e) {
        $("#global-loader").fadeOut("slow");

        // ______________ countUp

        // ______________ Vector Map
    });

    // ______________ BACK TO TOP BUTTON

    $(window).on("scroll", function(e) {
        if ($(this).scrollTop() > 300) {
            $("#back-to-top").fadeIn("slow");
        } else {
            $("#back-to-top").fadeOut("slow");
        }
    });

    $("#back-to-top").on("click", function(e) {
        $("html, body").animate(
            {
                scrollTop: 0
            },
            600
        );
        return false;
    });
    var ratingOptions = {
        selectors: {
            starsSelector: ".rating-stars",
            starSelector: ".rating-star",
            starActiveClass: "is--active",
            starHoverClass: "is--hover",
            starNoHoverClass: "is--no-hover",
            targetFormElementSelector: ".rating-value"
        }
    };
   
    
})(jQuery);

$(function(e) {
    /** Constant div card */
    const DIV_CARD = "div.card";
    /** Initialize tooltips */

    /** Initialize popovers */

    /** Function for remove card */
    $('[data-toggle="card-remove"]').on("click", function(e) {
        let $card = $(this).closest(DIV_CARD);

        $card.remove();

        e.preventDefault();
        return false;
    });

    /** Function for collapse card */
    $('[data-toggle="card-collapse"]').on("click", function(e) {
        let $card = $(this).closest(DIV_CARD);

        $card.toggleClass("card-collapsed");

        e.preventDefault();
        return false;
    });
    $('[data-toggle="card-fullscreen"]').on("click", function(e) {
        let $card = $(this).closest(DIV_CARD);

        $card.toggleClass("card-fullscreen").removeClass("card-collapsed");

        e.preventDefault();
        return false;
    });
});