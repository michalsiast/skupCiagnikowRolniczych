// N.B: This file is only for Swiper Slider testing purpose for Elementor

$(document).ready(function () {
    $('[data-carousel="swiper"]').each(function () {
        // Parse JSON configuration from the 'data-settings' attribute
        var settings = $(this).data('settings');
        var conf = {};

        if (settings) {
            // Parse JSON string into an object if needed
            conf = typeof settings === "string" ? JSON.parse(settings) : settings;
        }

        // Set Swiper configuration options based on parsed JSON settings
        if (conf.navigation === 'both') {
            conf.navigation = {
                nextEl: '#' + $(this).find('[data-swiper="next"]').attr('id'),
                prevEl: '#' + $(this).find('[data-swiper="prev"]').attr('id')
            };
        }
        
        if (conf.autoplay === 'yes') {
            conf.autoplay = {
                delay: conf.autoplay_speed || 5000,
                disableOnInteraction: conf.pause_on_interaction === 'yes'
            };
        }
        
        if (conf.infinite === 'yes') {
            conf.loop = true;
        }

        // Set other options directly from JSON
        conf.slidesPerView = conf.slidesPerView || 1;
        conf.speed = conf.speed || 500;
        conf.pagination = {
            el: '#' + $(this).find('[data-swiper="pagination"]').attr('id'),
            clickable: true
        };

        // Initialize Swiper
        var containerId = $(this).find('[data-swiper="container"]').attr('id');
        if (containerId) {
            new Swiper('#' + containerId, conf);
        }
    });
});

