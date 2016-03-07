var app = {
    init: function() {
        app.initSVG();
        app.homeSlideInit();
        app.initMaps();
        app.initRangeSlider();
        app.initSelect2();
        app.detailsPageLightSliderInit();
        app.detailsPageThumbnailReveal();
        app.detailsPageSlideshowTrigger();
        app.addToList();
        app.initSearchResultMap();
    },
    onResize: function() {

    },
    initSearchResultMap: function() {
        if (!jQuery("#content").hasClass("search-result")) {
            return false;
        }
        var map = new GMaps({
            div: '.search-map',
            lat: -12.043333,
            lng: -77.028333,
            height: 400,
            width: "100%"
        });

        map.addMarker({
            lat: -12.043333,
            lng: -77.028333,
            title: 'Lima',
            click: function(e) {
                alert('You clicked in this marker');
            }
        });

        map.addMarker({
            lat: -12.053333,
            lng: -77.028333,
            title: 'Lima',
            click: function(e) {
                alert('You clicked in this marker');
            }
        });
    },
    detailsPageLightSliderInit: function() {

        var $cycle = jQuery("#slideshow .images");

        $cycle.cycle({
            manualSpeed: 500,
            slides: '.slide',
            timeout: 0,
            next: '.next',
            prev: '.prev',
            caption: '#slideshow .page-count',
            captionTemplate: '{{slideNum}} / {{slideCount}}',
            pager: '#adv-custom-pager .carousel',
            pagerTemplate: "<a href='#'><img src='{{children.0.src}}' width=60 height=60></a>"
        });

    },
    detailsPageThumbnailReveal: function() {
        jQuery('#adv-custom-pager .thumbnail-button').click(function() {
            if (!jQuery('body').hasClass('thumbnail-open')) {
                jQuery('body').addClass('thumbnail-open')
            } else {
                jQuery('body').removeClass('thumbnail-open')
            }
        })
    },
    detailsPageSlideshowTrigger: function() {
        jQuery('.property-detail .hero-image').click(function() {
            jQuery("#slideshow").fadeIn(300);
            return false;
        });

        jQuery('#slideshow .close img').click(function() {
            jQuery("#slideshow").fadeOut(300);
        });
    },
    homeSlideInit: function() {
        jQuery('#slideshow').cycle({
            manualSpeed: 900,
            slides: '.slide-item',
            timeout: 4000
        });
    },
    addToList: function() {
        jQuery(".add-to-list").click(function() {
            jQuery(this).addClass("shortlisted");
            jQuery(this).find("span").text("Shortlisted");
        });
    },
    initSelect2: function() {
        jQuery(".location-select").select2({
            placeholder: "Select a location"
        });
    },
    initRangeSlider: function() {
        if (!jQuery("#content").hasClass("search-result")) {
            return false;
        }
        jQuery('.nstSlider').nstSlider({
            "left_grip_selector": ".leftGrip",
            "right_grip_selector": ".rightGrip",
            "value_bar_selector": ".bar",
            "value_changed_callback": function(cause, leftValue, rightValue) {
                jQuery('.leftLabel').text(leftValue);
                jQuery('.rightLabel').text(rightValue);
            }
        });
    },
    initMaps: function() {
        if (!jQuery("#content").hasClass("property-detail")) {
            return false;
        }

        function initialize() {
            var lang = new google.maps.LatLng(-8.67197, 115.1426033);
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
