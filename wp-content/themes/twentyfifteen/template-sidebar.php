<?php
/*
  Template Name: Template sidebar
 */
get_header();
?>
<div id="nxs-content-container" class="nxs-containsimmediatehovermenu has-sidebar">
    <div class="nxs-main">
        <!-- FRACTIONMARKER.start -->				
        <div class="nxs-article-container nxs-widgets-editable nxs-elements-container nxs-post-1037 ">
            <div class="nxs-postrows ui-sortable">
                <div class="nxs-row nxs-not-unistyled  nxs-rowtemplate-one  " id="nxs-pagerow-1079727988">
                    <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
                        <ul class="nxs-placeholder-list"> 
                            <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-whole nxs-unistyle-main nxs-unistyled nxs-not-unicontented nxs-widgettype-blog  nxs-column-1-1 nxs-column-lastinrow">
                                <div class="ABC nxs-height100 nxs-linkcolorvar nxs-linkcolorvar-main2-d  ">
                                    <div class="XYZ " style="height: auto; margin-top: 0px;">
                                        <div class="nxs-placeholder-content-wrap nxs-crop "> 
                                            <div id="nxs-widget-l1187387677" class="nxs-widget nxs-widget-l1187387677  nxs-blog ">
                                                <div class="nxs-blog-extended nxs-blogentries nxs-paging-page-0 default">
                                                    <div class="nxs-clear nxs-filler"></div>                                                    
                                                     <?php
                                                        // Start the loop.
                                                            while ( have_posts() ) : the_post();
                                                                get_template_part( 'content','single');
                                                            // End the loop.
                                                            endwhile;
                                                    ?>

                                                </div>
                                                <p class=" nxs-padding-bottom0"></p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="nxs-clear"></div>
                    </div> <!-- nxs-row-container --></div>
            </div>				  
        </div> 
    </div> <!-- END nxs-main -->
    <aside>
        <div class="nxs-sidebar-container nxs-sidebar1 nxs-widescreen nxs-widgets-editable nxs-elements-container nxs-post-27  ">
            <div class="nxs-postrows ui-sortable">
                <?php
                    include get_template_directory().'/templates/aside/block_contact.php';
                    include get_template_directory().'/templates/aside/block_service.php';
                    include get_template_directory().'/templates/aside/block_latest_new.php';
                ?>
            </div>
        </div> 
        <!-- end nxs-sidebar-container --></aside>				
    <div class="nxs-clear"></div>
</div>  
<?php get_footer(); ?>