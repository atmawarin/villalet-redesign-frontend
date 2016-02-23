var app = {
    init: function() {
        app.initSVG();
        app.homeSlideInit();
        app.initMaps();
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
    initMaps: function() {
        if(!jQuery("#content").hasClass("property-detail")) {
            return false;
        }

        function initialize() {
            var lang = new google.maps.LatLng(-8.67197,115.1426033);
            var mapOptions = {
                center: lang,
                zoom: 16,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true
            }
            var map = new google.maps.Map(document.getElementById('map'),
                mapOptions);

            var marker = new google.maps.Marker({
                position: lang,
                map: map,
                title: 'Hiriketiya Beachhouse',
                icon: 'http://www.beachhousehiriketiya.com/wp-content/themes/hybrid/assets/images/pin.png'
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
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
