var app = {
    init: function() {
        app.initSVG();
        app.homeSlideInit();
    },
    onResize: function() {

    },
    homeSlideInit: function() {
        jQuery('#slideshow').cycle({
            manualSpeed: 900,
            slides: '.slide-item',
            timeout: 4000
        });
    },
    initSVG: function() {

        // Set total and counter
        var $svgs = jQuery('img.svg');
        var total = $svgs.length;
        var count = 0;

        // If no SVGs on page, fire callback event
        if (total === count) jQuery(document).trigger('svgsLoaded', [count]);

        // Convert linked SVG to embedded SVG's
        $svgs.each(function() {
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {

                // Increment counter
                count++;

                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if (typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if (typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass + ' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);

                // If this is the last svg, fire callback event
                if (total === count) jQuery(document).trigger('svgsLoaded', [count]);
            });

        });
    }
};


jQuery(document).ready(function($) {
    app.init();
    jQuery(window).resize(function() {
        app.onResize();
    });
});
