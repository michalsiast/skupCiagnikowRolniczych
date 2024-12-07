/*-----------------------------------------------------------------------------------

    Project Name: Qunesa - Agency Business Template
    Version: 1.0.0
    Project URI: https://html.themestransmit.com/html/qunesa/
    Description: 
    Author URI: http://themeforest.net/user/themestransmit
    Support: themestransmit@gmail.com

-----------------------------------------------------------------------------------*/


(function ($) {
    "use strict";

    /* ============================================================ */
    /* PRELOADER START
    /* ============================================================ */
    $(document).ready(function($) {
        $(".preloader").fadeOut();
    });
    /* Preloader End */

    /* ============================================================ */
    /* MOBILE MENU START
    /* ============================================================ */
    function offcanvas_menu(selector, actionSelector) {
        var offcanvas_menu = $(selector);
        offcanvas_menu.on('click', function() {
            $(selector).toggleClass('is-menu-open');
        });

        var hamburgerbtn = $(selector);
        hamburgerbtn.on('click', function() {
            $(actionSelector).toggleClass('is-menu-open');
        });

        $(document).on('click', function(e) {
            var selectorType = $(actionSelector).add(offcanvas_menu);
            if (
                selectorType.is(e.target) !== true &&
                selectorType.has(e.target).length === 0
            ) {
                $(actionSelector).removeClass('is-menu-open');
                $(selector).removeClass('is-menu-open');
            }
        });
        $('.overlay-menu').on('click', function(e) {
            $(actionSelector).removeClass('is-menu-open');
            $(selector).removeClass('is-menu-open');
        });
    }
    offcanvas_menu(
        'header .sidebar__toggle, .close-menu ',
        '.offcanvas-menu, .overlay-menu, body'
    );

    $('.offcanvas-menu .menu-item-has-children').on('click', '.menu-link', function() {
        var $this = $(this);
        $this.toggleClass('active').next('.sub-menu').slideToggle();
        $this.parent().siblings().find('.sub-menu').slideUp().end().find('.menu-link').removeClass('active');
    });
    /* Mobile menu End */


    
    /* ============================================================ */
    /* StickyHeader
    /* ============================================================ */
    var fixed_top = $("header");
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 30) {
            fixed_top.addClass("sticky");
        } else {
            fixed_top.removeClass("sticky");
        }
    });

    /* ============================================================ */
    /* Gallery Lightbox
    /* ============================================================ */
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
    
    /* ============================================================ */
    /* ISOTOP
    /* ============================================================ */
    $(window).on("load resize",function(e){ 
        var $container = $('.isotop-gallery'),
        isotope = function () {
            $container.isotope({
                resizable: true,
                itemSelector: '.grid-item',
                layoutMode: 'packery',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-item',
                },
                hiddenStyle: {
                    transform: 'scale(.2) skew(30deg)',
                    opacity: 0
                },
                visibleStyle: {
                    transform: 'scale(1) skew(0deg)',
                    opacity: 1,
                },
                transitionDuration: '.5s',
            });
        };
        isotope(); 

        var $isotopefilters = $('.filter-buttons');
        $isotopefilters.on( 'click', 'button', function() {
            $(this).addClass('active').siblings().removeClass('active');

            var filterValue = $( this ).attr('data-filter');
            $container.isotope({ 
                filter: filterValue 
            });
        });        
    }); 

    // Fun Facts Counterup
    $('.counter.number').counterUp({
        delay: 10,
        time: 2000
    });

    /* ============================================================ */
    /* Scroll Top
    /* ============================================================ */
    $('body').append(
        "<a href='#top' title='Scroll Top' id='scroll-top' class='topbutton'><i class='fal fa-chevron-up'></i></a>"
    );
    let $scrolltop = $('#scroll-top');
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > $(this).height()) {
            $scrolltop.addClass('btn-show').removeClass('btn-hide');
        } else {
            $scrolltop.addClass('btn-hide').removeClass('btn-show');
        }
    });
    $("a[href='#top']").on('click', function () {
        $('html, body').animate({
                scrollTop: 0,
            },
            'normal'
        );
        return false;
    });


    /* ============================================================ */
    /* Searchbox Show-Hide
    /* ============================================================ */
    function toggleModal(modalClass, openTrigger, closeTrigger, activeClass) {
        $(document).on('click', openTrigger, function() {
            $(modalClass).addClass(activeClass);
        });    
        $(document).on('click', closeTrigger, function() {
            $(modalClass).removeClass(activeClass);
        });
    }
    toggleModal('.searchbox', '.searchModal', '.closeSearchBox', 'show');
    

    /* ============================================================ */
    /* Swiper Data Controls
    /* ============================================================ */
    $('[data-carousel="swiper"]').each(function () {

        let containe = $(this).find('[data-swiper="container"]').attr('id');
        let paginationMobile = $(this).data('pagination-mobile');  // Mobile pagination by ID (string)
        let paginationDesktop = $(this).data('pagination-desktop');  // Desktop pagination by ID (string)
        let paginationDefault = $(this).find('[data-swiper="pagination"]').attr('id');
        let prev = $(this).find('[data-swiper="prev"]').attr('id');
        let next = $(this).find('[data-swiper="next"]').attr('id');
        let autoplay = $(this).data('autoplay');
        let delay = $(this).data('delay');
        let iSlide = $(this).data('initial');
        let loop = $(this).data('loop');
        let parallax = $(this).data('parallax');
        let space = $(this).data('space');
        let speed = $(this).data('speed');
        let center = $(this).data('center');
        let effect = $(this).data('effect');
        let direction = $(this).data('direction');
        let mousewheel = $(this).data('mousewheel');
        let disableinteraction = $(this).data('disableinteraction');
        let touchmove = $(this).data('touchmove');
        let items = $(this).data('items');
        let itemssm = $(this).data('items-sm');
        let itemsmd = $(this).data('items-md');
        let itemslg = $(this).data('items-lg');
        let itemsxl = $(this).data('items-xl');
        let itemsxxl = $(this).data('items-xxl');
    
        // Configuration
        var conf = {};
    
        // Adjust pagination based on viewport size
        const updatePagination = () => {
            if (window.matchMedia("(max-width: 767px)").matches && paginationMobile) {
                // Mobile view - use mobile pagination if declared
                conf.pagination = {
                    el: '#' + paginationMobile,
                    clickable: true,
                    dynamicBullets: true,
                };
            } else if (!window.matchMedia("(max-width: 767px)").matches && paginationDesktop) {
                // Desktop view - use desktop pagination if declared
                conf.pagination = {
                    el: '#' + paginationDesktop,
                    clickable: true,
                    dynamicBullets: true,
                };
            } else if (paginationDefault) {
                // Fallback to default pagination if neither mobile nor desktop is declared
                conf.pagination = {
                    el: '#' + paginationDefault,
                    clickable: true,
                    dynamicBullets: true,
                };
            }
        };
    
        // Call the function initially to set the correct pagination
        updatePagination();
    
        // Listen for window resize to dynamically update pagination
        $(window).resize(function () {
            updatePagination();
        });
    
        if (items) {
            conf.slidesPerView = items;
        }
        if (autoplay) {
            conf.autoplay = {
                delay: delay,
                disableOnInteraction: disableinteraction,
            };
        }
        if (iSlide) {
            conf.initialSlide = iSlide;
        }
        if (center) {
            conf.centeredSlides = center;
        }
        if (loop) {
            conf.loop = loop;
        }
        if (parallax) {
            conf.parallax = parallax;
        }
        if (space) {
            conf.spaceBetween = space;
        }
        if (speed) {
            conf.speed = speed;
        }
        if (mousewheel) {
            conf.mousewheel = mousewheel;
        }
        if (effect) {
            conf.effect = effect;
        }
        if (direction) {
            conf.direction = direction;
        }
        if (touchmove !== undefined) {
            conf.allowTouchMove = touchmove;
        } else {
            conf.allowTouchMove = true;
        }
        if (prev) {
            conf.navigation = {
                prevEl: '#' + prev,
                nextEl: '#' + next
            };
        }
        
    
        // Only include breakpoints that are defined
        conf.breakpoints = {};
        if (itemssm) {
            conf.breakpoints[576] = { slidesPerView: itemssm };
        }
        if (itemsmd) {
            conf.breakpoints[768] = { slidesPerView: itemsmd };
        }
        if (itemslg) {
            conf.breakpoints[992] = { slidesPerView: itemslg };
        }
        if (itemsxl) {
            conf.breakpoints[1200] = { slidesPerView: itemsxl };
        }
        if (itemsxxl) {
            conf.breakpoints[1400] = { slidesPerView: itemsxxl };
        }
    
        // Initialization
        if (containe) {
            let initID = '#' + containe;
            let init = new Swiper(initID, conf);
        }
    });
    
    /* ============================================================ */
    /* Animate on scroll 
    /* ============================================================ */
    AOS.init({
        duration: 800,
        once: true,
    });
    
})(jQuery);