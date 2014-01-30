jQuery(document).ready(function(){
	"use strict";

	if (jQuery.magnificPopup)
	{
		jQuery('.w-gallery-tnails-h').magnificPopup({
			type: 'image',
			delegate: 'a',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1]
			},
			removalDelay: 300,
			mainClass: 'mfp-fade'

		});

		jQuery('a[ref=magnificPopup][class!=direct-link]').magnificPopup({
			type: 'image'
		});
	}

	// Carousel
	if (jQuery().carousello){
		jQuery(".w-listing.type_carousel, .w-clients.type_carousel, .w-portfolio.type_carousel").carousello({use3d: false});
	}

	if (jQuery().isotope){
		var portfolioContainer = jQuery('.w-portfolio.type_sortable .w-portfolio-list-h');
		if (portfolioContainer) {
			portfolioContainer.imagesLoaded(function(){
				portfolioContainer.isotope({
					itemSelector : '.w-portfolio-item',
					layoutMode : 'fitRows'
				});
			});

			jQuery('.w-filters-item').each(function() {
				var item = jQuery(this),
					link = item.find('.w-filters-item-link');
				link.click(function(){
					if ( ! item.hasClass('active')) {
						jQuery('.w-filters-item').removeClass('active');
						item.addClass('active');
						var selector = jQuery(this).attr('data-filter');
						portfolioContainer.isotope({ filter: selector });
						return false;
					}

				});
			});
			jQuery('.w-portfolio-item-meta-tags a').each(function() {

				jQuery(this).click(function(){
					var selector = jQuery(this).attr('data-filter'),
						topFilterLink = jQuery('a[class="w-filters-item-link"][data-filter="'+selector+'"]'),
						topFilter = topFilterLink.parent('.w-filters-item');
					if ( ! topFilter.hasClass('active')) {
						jQuery('.w-filters-item').removeClass('active');
						topFilter.addClass('active');
						portfolioContainer.isotope({ filter: selector });
						return false;
					}

				});
			});

		}

		var postsContainer = jQuery('.w-blog.type_masonry .w-blog-list');

		if (postsContainer.length) {
			postsContainer.imagesLoaded(function(){
				postsContainer.isotope({
					itemSelector : '.w-blog-entry',
					layoutMode : 'masonry'
				});
			});

			var postsResizeTimer;

			jQuery(window).resize(function(){
				window.clearTimeout(postsResizeTimer);
				postsResizeTimer = window.setTimeout(function(){
					postsContainer.isotope('reLayout');

				}, 50);

			});
		}

		var galleryContainer = jQuery('.w-gallery.type_masonry .w-gallery-tnails-h');

		if (galleryContainer.length) {
			galleryContainer.imagesLoaded(function(){
				galleryContainer.isotope({
					layoutMode : 'masonry'
				});
			});

			var galleryResizeTimer;

			jQuery(window).resize(function(){
				window.clearTimeout(galleryResizeTimer);
				galleryResizeTimer = window.setTimeout(function(){
					galleryContainer.isotope('reLayout');

				}, 50);

			});
		}

	}

	if (jQuery().revolution){
		if (jQuery.fn.cssOriginal !== undefined) {
			jQuery.fn.css = jQuery.fn.cssOriginal;
		}
		jQuery('.home-slider').revolution({
			startwidth: 1140,
			startheight: 500,
			soloArrowLeftHOffset: 20,
			soloArrowLeftVOffset: 0,
			soloArrowRightHOffset: 20,
			soloArrowRightVOffset: 0,
			onHoverStop:"off",
			fullWidth:"on",
		});
		jQuery('.landing-slider').revolution({
			startwidth: 1140,
			startheight: 440,
			soloArrowLeftHOffset: 20,
			soloArrowLeftVOffset: 0,
			soloArrowRightHOffset: 20,
			soloArrowRightVOffset: 0,
			onHoverStop:"off",
			fullWidth:"on",
		});
		jQuery('.fullscreen-slider').revolution({
			startwidth: 1140,
			startheight: 500,
			soloArrowLeftHOffset: 20,
			soloArrowLeftVOffset: 0,
			soloArrowRightHOffset: 20,
			soloArrowRightVOffset: 0,
			onHoverStop:"off",
			fullScreen:"on",
			fullScreenOffsetContainer:".l-header",
		});
	}

	if (jQuery().waypoint){
		jQuery('body').imagesLoaded(function(){

			jQuery('.animate_afc, .animate_afl, .animate_afr, .animate_aft, .animate_afb, .animate_wfc, .animate_hfc, .animate_rfc, .animate_rfl, .animate_rfr').waypoint(function() {
				if ( ! jQuery(this).hasClass('animate_start')){
					var elm = jQuery(this);
					setTimeout(function() {
						elm.addClass('animate_start');
					}, 20);
				}
			}, {offset:'85%', triggerOnce: true});

		});

        jQuery('.w-counter').waypoint(function() {
            var counter = jQuery(this).find('.w-counter-number'),
                count = parseInt(counter.text(), 10),
                prefix = '',
                suffix = '',
                number = 0;

            if (jQuery(this).data('count')) {
                count = parseInt(jQuery(this).data('count'), 10);
            }
            if (jQuery(this).data('prefix')) {
                prefix = jQuery(this).data('prefix');
            }
            if (jQuery(this).data('suffix')) {
                suffix = jQuery(this).data('suffix');
            }

            var	step = Math.ceil(count/25),
                handler = setInterval(function() {
                    number += step;
                    counter.text(prefix+number+suffix);
                    if (number >= count) {
                        counter.text(prefix+count+suffix);
                        window.clearInterval(handler);
                    }
                }, 40);


        }, {offset:'85%', triggerOnce: true});
	}

	var scrollHandlerPageTO = false,
        logoHeight = (window.logoHeight != undefined)?window.logoHeight:30,
        logoHeightSticky = (window.logoHeightSticky != undefined)?window.logoHeightSticky:30,
		scrollHandlerPage = function(){
			var scrollPosition	= parseInt(jQuery(window).scrollTop(), 10),
				windowHeight = jQuery(window).height()- 0,
				windowWidth = jQuery(window).width()- 0;

			if (scrollPosition >= windowHeight) {
				jQuery('.w-toplink').addClass('active');
			} else {
				jQuery('.w-toplink').removeClass('active');
			}

			if (jQuery('.l-canvas').hasClass('headerpos_fixed')) {
				var topHeaderHeight, middleHeaderHeight;

				if (scrollPosition > 0 && windowWidth > 1023) {
					if ( ! jQuery('.l-header').hasClass('state_sticky')) {
						jQuery('.l-header').addClass('state_sticky');
                        jQuery('.w-logo-img').css('height', logoHeightSticky+'px');
					}

					if (jQuery('.l-canvas').hasClass('headertype_extended')) {
						if (scrollPosition > 60) {
							topHeaderHeight = Math.max(96-scrollPosition, 0);
							jQuery('.l-subheader.at_top').css({'height': topHeaderHeight+'px', 'overflow': 'hidden'});
						} else {
							jQuery('.l-subheader.at_top').css({'height': '', 'overflow': ''});
						}

					}

					middleHeaderHeight = Math.max(Math.round(120-scrollPosition), 60);
					jQuery('.l-subheader.at_middle').css({'height': middleHeaderHeight+'px', 'line-height': middleHeaderHeight+'px'});

				} else {
					if (jQuery('.l-header').hasClass('state_sticky')) {
						jQuery('.l-header').removeClass('state_sticky');
                        jQuery('.w-logo-img').css('height', logoHeight+'px');
					}

					jQuery('.l-subheader.at_middle').css({'height': '', 'line-height': ''});
					jQuery('.l-subheader.at_top').css({'height': '', 'overflow': ''});
				}


			}
		},
		menuHandler = function(){
            jQuery('.l-header .w-nav').each(function () {
                var nav = jQuery(this),
                    navControl = nav.find('.w-nav-control'),
                    navList = nav.find('.w-nav-list.level_1'),
                    navSubLists = navList.find('.w-nav-item.with_sublevel .w-nav-list'),
                    navAnchors = nav.find('.w-nav-anchor'),
                    navRunning = false,
                    mobileNavWidth = 1000,
                    W = jQuery(window).width()- 0;

                if (window.mobileNavWidth !== undefined) {
                    mobileNavWidth = window.mobileNavWidth-0;
                }

                if (W <= mobileNavWidth) {
                    var listOpen = false,
                        navSubControls = navList.find('.w-nav-item.with_sublevel .w-nav-hint');

                    if (! nav.hasClass('touch_enabled')) {
                        nav.addClass('touch_enabled');
                        navList.css({display: 'none'});
                        navSubLists.css({display: 'none'});
                    }

                    navControl.off('click').click(function() {
                        if (! navRunning) {
                            navRunning = true;
                            if (listOpen) {
                                navList.slideUp(250, function(){
                                    navRunning = false;
                                });
                                listOpen = false;
                            } else {
                                navList.slideDown(250, function(){
                                    navRunning = false;
                                });
                                listOpen = true;
                            }
                        }
                    });

                    navSubControls.off('click').click(function() {
                        if (! navRunning) {
                            navRunning = true;
                            var subList = jQuery(this).closest('.w-nav-item-h').find('.w-nav-list').first(),
                                subListOpen = subList.data('subListOpen'),
                                currentNavItem = jQuery(this).closest('.w-nav-item');

                            if (subListOpen) {
                                subList.slideUp(250, function(){
                                    navRunning = false;
                                    currentNavItem.removeClass('open');
                                });
                                subListOpen = false;
                            } else {
                                subList.slideDown(250, function(){
                                    navRunning = false;
                                    currentNavItem.addClass('open');
                                });
                                subListOpen = true;
                            }

                            subList.data('subListOpen', subListOpen);
                        }

                        return false;
                    });

                    navAnchors.click(function() {
                        if (W <= mobileNavWidth) {
                            navRunning = true;
                            navList.slideUp(250, function(){
                                navRunning = false;
                            });
                            listOpen = false;
                        }
                    });

                } else {
                    nav.removeClass('touch_enabled');
                    nav.find('.w-nav-item').removeClass('open');
                    navList.css({height: '', display: ''});
                    navSubLists.css({height: '', display: ''});
                    navControl.off('click');

                }

            });
		};

	scrollHandlerPage();
	menuHandler();

	jQuery(window).scroll(function() {
		scrollHandlerPage();
	});

	jQuery(window).resize(function() {
		if (scrollHandlerPageTO !== false) {
			window.clearTimeout(scrollHandlerPageTO);
		}
		scrollHandlerPageTO = window.setTimeout(function(){
			scrollHandlerPage();
			menuHandler();
		}, 5);

	});

	jQuery('.w-toplink').click(function(event) {
		event.preventDefault();
		event.stopPropagation();
		jQuery.smoothScroll({
			scrollTarget: '#'
		});
	});


});
