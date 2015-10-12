<?php
/*
Template Name: Template full width
*/
get_header();
?>
<div id="nxs-content-container" class="nxs-containsimmediatehovermenu has-no-sidebar">
    <div class="nxs-subheader-container nxs-widescreen nxs-widgets-editable nxs-elements-container nxs-post-316  ">
        <div class="nxs-postrows ui-sortable">
            <div class="nxs-row nxs-not-unistyled nxs-padding-top-1-0   nxs-rowtemplate-one  " id="nxs-pagerow-prid1394360083">
                <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
                    <ul class="nxs-placeholder-list"> 
                        <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-whole nxs-unistyle-pagesubheader nxs-unistyled nxs-not-unicontented nxs-widgettype-wordpresstitle  nxs-column-1-1 nxs-column-lastinrow">
                            <div class="ABC nxs-height100 ">
                                <div class="XYZ ">
                                    <div class="nxs-placeholder-content-wrap nxs-crop "> 
                                        <div id="nxs-widget-l1114342273" class="nxs-widget nxs-widget-l1114342273  nxs-wordpress-title">
                                            <h1 class="nxs-title nxs-align-center  nxs-head-fontsize-3-0  "><?php the_title( ); ?></h1>
                                            <div class="nxs-clear"></div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="nxs-clear"></div>
                </div> <!-- nxs-row-container -->
            </div>
        </div>					
    </div>
    <!-- FRACTIONMARKER.start -->					
    <div class="nxs-article-container nxs-widgets-editable nxs-elements-container nxs-post-1078 ">
        <div class="nxs-postrows ui-sortable">
            <div class="nxs-row nxs-not-unistyled  nxs-rowtemplate-one  " id="nxs-pagerow-prid1170205676">
                <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
                    <ul class="nxs-placeholder-list"> 
                        <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-whole nxs-margin-bottom-2-0  nxs-text-fontsize-1-8  nxs-unistyle-lead nxs-unistyled nxs-not-unicontented nxs-widgettype-text  nxs-column-1-1 nxs-column-lastinrow">
                            <div class="ABC nxs-height100 nxs-linkcolorvar nxs-linkcolorvar-base1-ll  ">
                                <div class="XYZ ">
                                    <div class="nxs-placeholder-content-wrap nxs-crop "> 
                                        <div id="nxs-widget-l1358719632" class="nxs-widget nxs-widget-l1358719632  nxs-text ">
                                            <div class="nxs-default-p nxs-applylinkvarcolor nxs-padding-bottom0 nxs-align-center  "><p>
                                                       <p><?php
                                                        // Start the loop.
                                                        while ( have_posts() ) : the_post();

                                                            // Include the page content template.
                                                            echo get_the_content( );

                                                        // End the loop.
                                                        endwhile;
                                                        ?>
                                                    </p>
                                            </div>
                                            <div class="nxs-clear"></div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="nxs-clear"></div>
                </div> <!-- nxs-row-container -->
            </div>
        </div>				  
    </div> 
    <div class="nxs-clear"></div>
</div>
<?php get_footer(); ?>