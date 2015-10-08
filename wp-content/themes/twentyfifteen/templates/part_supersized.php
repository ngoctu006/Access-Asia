<?php if (is_front_page()): ?>
    <div id="nxs-supersized" class="nxs-sitewide-element nxs-containshovermenu1    remove-thumbnail-navigation has-height" style="height: 500px;">
        <div class="caption-aligner nxs-width50 nxs-center" style="height: 500px;">			
            <div id="slidecaption" class="nxs-placeholder " style="">
                <div class="slidecaption-container nxs-padding-1-0  nxs-colorzen nxs-colorzen-base2-a0-0  nxs-align-center ">
                    <h2 class="nxs-title nxs-head-fontsize-4-0   no-blink">Offering loss prevention</h2>
                    <div class="nxs-margin-bottom20"></div>
                    <div class="nxs-placeholder nxs-text-fontsize-2-0  ">
                        <div class="nxs-default-p nxs-padding-bottom0 no-blink">
                            <p>to help protect merchants from criminality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/plugin/slider/supersized.css">
    <script src="<?php echo get_template_directory_uri() ?>/js/plugin/slider/supersized.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/plugin/slider/theme.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/nxs.theme.js "></script>
    <script type='text/javascript'>
        jQuery(window).ready(
                function () {
                    jQuery('html').addClass('nxs-pageslider');
                }
        );
        var jqv = jQuery.fn.jquery;
        var jQ_nxs = jQuery.noConflict(true);
        var jQuery = jQ_nxs;
        var $ = jQ_nxs;

        jQuery(document).ready
                (
                        function () {
                            // handling of "is handheld" is already taken care of;
                            // if we reach this point we should always render the slider
                            var shouldrenderslider = true;
                            if (shouldrenderslider) {
                                jQ_nxs(function ($) {
                                    $.supersized({
                                        // Functionality
                                        slideshow: 1, // Slideshow on/off
                                        autoplay: 1, // Slideshow starts playing automatically
                                        start_slide: 0, // Start slide (0 is random)
                                        stop_loop: 0, // Pauses slideshow on last slide
                                        random: 0, // Randomize slide order (Ignores start slide)
                                        slide_interval: 5000, // Length between transitions
                                        transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                                        transition_speed: 300, // Speed of transition
                                        new_window: 0, // Image links open in new window/tab
                                        pause_hover: 0, // Pause slideshow on hover
                                        keyboard_nav: 1, // Keyboard navigation on/off
                                        performance: 2, // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                                        image_protect: 0, // Disables image dragging and right click with Javascript

                                        // Size & Position                         
                                        min_width: 0, // Min width allowed (in pixels)
                                        min_height: 0, // Min height allowed (in pixels)
                                        vertical_center: 1, // Vertically center background
                                        horizontal_center: 1, // Horizontally center background
                                        fit_always: 0, // Image will never exceed browser width or height (Ignores min. dimensions)
                                        fit_portrait: 1, // Portrait images will not exceed browser height
                                        fit_landscape: 0, // Landscape images will not exceed browser width

                                        // Components                           
                                        slide_links: 'blank', // Individual links for each slide (Options: false, 'number', 'name', 'blank')
                                        thumb_links: 1, // Individual thumb links for each slide
                                        thumbnail_navigation: 0, // Thumbnail navigation

                                        progress_bar: 1, // Timer for each slide                         
                                        mouse_scrub: 1,
                                        slides: [// Slideshow Images

                                            {
                                                image: 'http://securitycompany.catalog.c1.us-e1.nexusthemes.com/wp-content/uploads/2014/08/bg-13.jpg?quality=100.3015072922390',
                                                title: '<div class="slidecaption-container nxs-padding-1-0  nxs-colorzen nxs-colorzen-base2-a0-0  nxs-align-center "><h2 class="nxs-title nxs-head-fontsize-4-0   no-blink">Providing security solutions</h2><div class="nxs-margin-bottom20"></div><div class="nxs-placeholder nxs-text-fontsize-2-0  "><div class="nxs-default-p nxs-padding-bottom0 no-blink"><p>to protect lives & properties</p></div></div></div>',
                                                thumb: 'http://securitycompany.catalog.c1.us-e1.nexusthemes.com/wp-content/uploads/2014/08/bg-13.jpg?quality=100.3015072922390',
                                                url: ''
                                            }, {
                                                image: 'http://securitycompany.catalog.c1.us-e1.nexusthemes.com/wp-content/uploads/2014/08/bg-24.jpg?quality=100.3015072922390',
                                                title: '<div class="slidecaption-container nxs-padding-1-0  nxs-colorzen nxs-colorzen-base2-a0-0  nxs-align-center "><h2 class="nxs-title nxs-head-fontsize-4-0   no-blink">Offering loss prevention</h2><div class="nxs-margin-bottom20"></div><div class="nxs-placeholder nxs-text-fontsize-2-0  "><div class="nxs-default-p nxs-padding-bottom0 no-blink"><p>to help protect merchants from criminality</p></div></div></div>',
                                                thumb: 'http://securitycompany.catalog.c1.us-e1.nexusthemes.com/wp-content/uploads/2014/08/bg-24.jpg?quality=100.3015072922390',
                                                url: ''
                                            }, {
                                                image: 'http://securitycompany.catalog.c1.us-e1.nexusthemes.com/wp-content/uploads/2014/08/bg-3.jpg?quality=100.3015072922390',
                                                title: '<div class="slidecaption-container nxs-padding-1-0  nxs-colorzen nxs-colorzen-base2-a0-0  nxs-align-center "><h2 class="nxs-title nxs-head-fontsize-4-0   no-blink">Serving the entire state</h2><div class="nxs-margin-bottom20"></div><div class="nxs-placeholder nxs-text-fontsize-2-0  "><div class="nxs-default-p nxs-padding-bottom0 no-blink"><p>with our best guards and officers</p></div></div></div>',
                                                thumb: 'http://securitycompany.catalog.c1.us-e1.nexusthemes.com/wp-content/uploads/2014/08/bg-3.jpg?quality=100.3015072922390',
                                                url: ''
                                            }
                                        ]
                                    });
                                });
                            } else {
                                jQuery('#nxs-supersized').remove();
                                jQuery('#supersized-loader').remove();
                            }
                        }
                );
    </script>
<?php endif; ?>