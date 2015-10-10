<?php 
if (is_front_page()): ?>
    <div id="nxs-supersized" class="nxs-sitewide-element nxs-containshovermenu1    remove-thumbnail-navigation has-height" style="height: 500px;">
        <div class="caption-aligner nxs-width50 nxs-center" style="height: 500px;">			
            <div id="slidecaption" class="nxs-placeholder " style="">
                <div class="slidecaption-container nxs-padding-1-0  nxs-colorzen nxs-colorzen-base2-a0-0  nxs-align-center ">
                   
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
                            var shouldrenderslider = true;
                            if (shouldrenderslider) {
                                jQ_nxs(function ($) {
                                    $.supersized({
                                        slideshow: 1,
                                        autoplay: 1,
                                        start_slide: 0,
                                        stop_loop: 0,
                                        random: 0,
                                        slide_interval: 5000,
                                        transition: 1,
                                        transition_speed: 300,
                                        new_window: 0,
                                        pause_hover: 0,
                                        keyboard_nav: 1,
                                        performance: 2,
                                        image_protect: 0,
                                        min_width: 0, 
                                        min_height: 0, 
                                        vertical_center: 1, 
                                        horizontal_center: 1, 
                                        fit_always: 0, 
                                        fit_portrait: 1, 
                                        fit_landscape: 0,
                                        slide_links: 'blank',
                                        thumb_links: 1,
                                        thumbnail_navigation: 0, 
                                        progress_bar: 1,                          
                                        mouse_scrub: 1,
                                        slides: [
                                                <?php
                                                    $i = 0 ;
                                                    foreach($slider_metas as $value => $slider_meta): 
                                                ?>
                                                {
                                                    image: '<?php echo cycloneslider_thumb($slider_meta['id'], $slider_settings['width'], $slider_settings['height'], false, $slider_meta); ?>',
                                                    title: '<div class="slidecaption-container nxs-padding-1-0  nxs-colorzen nxs-colorzen-base2-a0-0  nxs-align-center "><h2 class="nxs-title nxs-head-fontsize-4-0   no-blink"><?php echo  $slider_meta['title']; ?></h2><div class="nxs-margin-bottom20"></div><div class="nxs-placeholder nxs-text-fontsize-2-0  "><div class="nxs-default-p nxs-padding-bottom0 no-blink"><p><?php echo $slider_meta['description'];  ?></p></div></div></div>',
                                                    thumb: '<?php echo cycloneslider_thumb($slider_meta['id'], $slider_settings['width'], $slider_settings['height'], false, $slider_meta); ?>" width="<?php echo $slider_settings['width'];?>" height="<?php echo $slider_settings['height'];?>" alt="slide" />',
                                                }
                                                <?php
                                                    if($i != count($slider_metas))
                                                    {
                                                        echo ',';
                                                    }
                                                    $i++;
                                                    endforeach;
                                                ?>

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