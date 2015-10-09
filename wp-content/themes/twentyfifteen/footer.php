<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
    </div><!-- .nxs-content -->
<div id="nxs-footer" class="nxs-containsimmediatehovermenu nxs-sitewide-element nxs-widescreen">
    <div id="nxs-footer-container" class="nxs-sitewide-container nxs-footer-container nxs-colorzen nxs-colorzen-c32  nxs-widgets-editable nxs-elements-container nxs-post-148 ">
        <div class="nxs-postrows ui-sortable">
            <div class="nxs-row nxs-not-unistyled nxs-colorzen nxs-colorzen-c12  nxs-linkcolorvar nxs-linkcolorvar-base2-dd  nxs-padding-top-0-5  nxs-border-top-width-1-0   nxs-rowtemplate-1third2third  " id="nxs-pagerow-prid1116019177">
                <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
                    <ul class="nxs-placeholder-list"> 
                        <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-third nxs-margin-bottom-0-5  nxs-unistyle-footer nxs-unistyled nxs-not-unicontented nxs-widgettype-logo  nxs-column-1-2" style="height: 50px;">
                            <div class="ABC nxs-height100 ">
                                <div class="XYZ ">
                                    <div class="nxs-placeholder-content-wrap nxs-crop ">  
                                        <div id="nxs-widget-l1270444443" class="nxs-widget nxs-widget-l1270444443  nxs-logo ">	
                                            <div class=" nxs-table " style=" min-height: 0px; height: 1px;">
                                                <div class="wrapper nxs-applylinkvarcolor nxs-table-cell ">
                                                    <a class=" " style=" " target="" href="<?php echo home_url(); ?>">
                                                        <div class="logo-image">
                                                            <img src="<?php echo get_option('twentyfifteen')['gb_logo_image'] ?>" class="nxs-maxheight-0-5   " style="float: left; margin-right: 15px; ">
                                                        </div>
                                                    </a>
                                                    <div class="nxs-clear"></div>
                                                </div> <!-- END wrapper -->
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </li> 
                        <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-two-third nxs-margin-bottom-0-0  nxs-unistyle-footer nxs-unistyled nxs-not-unicontented nxs-widgettype-menucontainer  nxs-column-2-2 nxs-column-lastinrow" style="height: 50px;">
                            <div class="ABC  nxs-colorzen nxs-colorzen-base1-a0-0  ">
                                <div class="XYZ nxs-valign-middle ">
                                    <div class="nxs-placeholder-content-wrap "> 
                                        <div id="nxs-widget-r1270444443" class="nxs-widget nxs-widget-r1270444443  nxs-menu ">
                                            <div class="nxs-menu-aligner nxs-applylinkvarcolor  right nxs-touched">
                                                <!--Start Insert Top Menu -->
                                                <?php 
                                                        wp_nav_menu(array(
                                                            'theme_location'=>'Footer Menu',
                                                            'menu' => 'Footer menu',
                                                            'container_id'=>'cssmenu',
                                                            'menu_class' => 'ct-list-menu left header-menu footer-menu clear display720 ',
                                                            
                                                            'walker' => new CSS_Menu_Maker_Walker()
                                                        ));
                                                 ?>
                                                <!--End Insert Bottom Menu -->
                                            </div> <!-- menu aligner -->
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
            <div class="nxs-row nxs-not-unistyled nxs-linkcolorvar nxs-linkcolorvar-base1-ll  nxs-padding-top-1-0   nxs-rowtemplate-131313  " id="nxs-pagerow-prid1188025901"><div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
                    <ul class="nxs-placeholder-list">
                        <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-third nxs-text-fontsize-1-0  nxs-unistyle-footer nxs-unistyled nxs-not-unicontented nxs-widgettype-text  nxs-column-1-3" style="">
                            <div class="ABC nxs-height100 ">
                                <div class="XYZ ">
                                    <div class="nxs-placeholder-content-wrap nxs-crop "> 
                                        <div id="nxs-widget-a1021349230" class="nxs-widget nxs-widget-a1021349230  nxs-text ">
                                            <div class="nxs-applylinkvarcolor">
                                                <h2 class="nxs-title nxs-align-left  nxs-heightiq nxs-heightiq-p1-title  " style="height: 32px;">Security Company</h2>
                                            </div>
                                            <div class="nxs-clear nxs-filler"></div>
                                            <div class="nxs-heightiq nxs-heightiq-p1-text" >
                                                <div class="nxs-default-p nxs-applylinkvarcolor nxs-padding-bottom0 nxs-align-left  "><p>
                                                    <?php echo get_option('twentyfifteen')['gb_adress_footer'] ?>
                                                </p>
                                                </div>
                                                <div class="nxs-clear"></div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </li> 
                        <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-third nxs-unistyle-footer nxs-unistyled nxs-not-unicontented nxs-widgettype-blog  nxs-column-2-3" style="">
                            <div class="ABC nxs-height100 ">
                                <div class="XYZ">
                                    <div class="nxs-placeholder-content-wrap nxs-crop ">  
                                        <div id="nxs-widget-b1021349230" class="nxs-widget nxs-widget-b1021349230  nxs-blog ">
                                            <div class="nxs-blog-minimal nxs-blogentries nxs-paging-page-0 default">
                                                <h2 class="nxs-title  nxs-align-left"><?php _e('Our Services') ?></h2>
                                                <div class="nxs-clear nxs-filler"></div>
                                                <?php
                                                    $page_data = get_page_by_title('Services We Offer');
                                                    $my_wp_query = new WP_Query();
                                                    $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1));
                                                    $list_child = get_page_children($page_data->ID, $all_wp_pages);
                                                ?>
                                                <ul>
                                                    <?php
                                                        foreach ($list_child as $key => $value) {
                                                    ?>
                                                        <li class="nxs-applylinkvarcolor nxs-default-p nxs-padding-bottom0 nxs-padding-left20">
                                                            <span class="nxs-icon-arrow-right2  font-icon"></span>
                                                            <a href="<?php echo $value->guid; ?>"><span><?php echo $value->post_title; ?></span></a>
                                                        </li>
                                                    <?php
                                                        } wp_reset_postdata();
                                                    ?>
                                                </ul>
                                            </div>
                                            <p class=" nxs-padding-bottom0"></p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-third nxs-unistyle-footer nxs-unistyled nxs-not-unicontented nxs-widgettype-blog  nxs-column-3-3 nxs-column-lastinrow" style="">
                            <div class="ABC nxs-height100 ">
                                <div class="XYZ ">
                                    <div class="nxs-placeholder-content-wrap nxs-crop ">
                                            <div id="nxs-widget-c1021349230" class="nxs-widget nxs-widget-c1021349230  nxs-blog ">
                                                <div class="nxs-blog-minimal nxs-blogentries nxs-paging-page-0 default">
                                                    <h2 class="nxs-title  nxs-align-left"><?php _e('Latest News'); ?></h2>
                                                    <div class="nxs-clear nxs-filler"></div>
                                                    <ul>
                                                       <?php
                                                             $args = array(
                                                                'posts_per_page' => 5,
                                                                'offset' => 0,
                                                                'orderby' => 'date',
                                                                'order' => 'DESC',
                                                                'post_type' => 'post',
                                                                'post_status' => 'publish',
                                                                'suppress_filters' => true
                                                        );
                                                        $new_post = new Wp_Query($args);
                                                        while ($new_post->have_posts()) {
                                                            $new_post->the_post();
                                                        ?>
                                                            <li class="nxs-applylinkvarcolor nxs-default-p nxs-padding-bottom0 nxs-padding-left20">
                                                                <span class="nxs-icon-text  font-icon"></span>
                                                                <a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
                                                            </li>
                                                        <?php } wp_reset_postdata(); ?>
                                                    </ul>
                                            </div>
                                            <p class=" nxs-padding-bottom0"></p>
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
</div>
</div><!-- nxs-container -->
<?php wp_footer(); ?>

</body>
</html>
