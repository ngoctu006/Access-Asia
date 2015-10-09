<?php
$page_data = get_page_by_title('Services We Offer');
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1));
$list_child = get_page_children($page_data->ID, $all_wp_pages);
?>
<!-- Start info Page service-->
<div class="nxs-row nxs-not-unistyled nxs-colorzen nxs-colorzen-base1-a0-0   nxs-rowtemplate-one  " id="nxs-pagerow-prid1314119012">
    <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
        <ul class="nxs-placeholder-list"> 
            <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-whole nxs-unistyle-introtext nxs-unistyled nxs-not-unicontented nxs-widgettype-text  nxs-column-1-1 nxs-column-lastinrow">
                <div class="ABC">
                    <div class="XYZ nxs-valign-middle">
                        <div class="nxs-placeholder-content-wrap nxs-crop ">  
                            <div id="nxs-widget-l1288127012" class="nxs-widget nxs-widget-l1288127012  nxs-text ">
                                <div class="nxs-applylinkvarcolor">
                                    <h1 class="nxs-title nxs-align-center  nxs-head-fontsize-3-0  nxs-head-fontsize-3-0  nxs-heightiq nxs-heightiq-p1-title  ">
                                        <?php echo $page_data->post_title; ?>
                                    </h1>
                                </div>
                                <div class="nxs-clear nxs-filler"></div>
                                <div class="nxs-default-p nxs-applylinkvarcolor nxs-padding-bottom0 nxs-align-left  ">
                                    <p style="text-align: center;">
                                        <?php
                                             echo $page_data->post_content;
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
<!-- End info Page service-->
<?php
$i = 0;
foreach ($list_child as $key => $value) {
    $image_id = get_post_thumbnail_id($value->ID);
    $image_url = wp_get_attachment_image_src($image_id, 'full', true);
    if ($i == 0) {
        echo '<div class="nxs-row nxs-not-unistyled  nxs-rowtemplate-131313  " id="nxs-pagerow-prid1006544928">
                    <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
                        <ul class="nxs-placeholder-list"> ';
    }
    ?>
    <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-third nxs-unistyle-main nxs-unistyled nxs-not-unicontented nxs-widgettype-signpost  nxs-column-1-3" >
        <div class="ABC nxs-height100 ">
            <div class="XYZ ">
                <div class="nxs-placeholder-content-wrap nxs-crop ">  
                    <div id="nxs-widget-a1214080472" class="nxs-widget nxs-widget-a1214080472  nxs-signpost ">  
                        <!-- DEFAULT SCENARIO -->
                        <div class="transition nxs-default" style="height: 200px;box-shadow: none;">
                            <a target="_self" href="<?php echo $value->guid; ?>">
                                <div class="border nxs-border-width-0-0 ">  </div>
                            </a>
                            <div class="image" style="background: url(<?php echo $image_url[0] ?>) no-repeat top center;height: 200px;"></div>
                            <div class="mask-color nxs-colorzen nxs-colorzen-c32 " >
                                <div class="mask-container nxs-default-p nxs-padding-bottom0">
                                    <p class="nxs-default-p nxs-applylinkvarcolor nxs-padding-bottom0 "><?php the_field('short_description', $value->ID); ?> </p>
                                    <div class="nxs-clear nxs-padding-bottom10"></div>
                                    <p class=" nxs-padding-bottom0">
                                        <a target="_self" class="nxs-button nxs-button-scale-1-2  nxs-colorzen nxs-colorzen-c22  " href="<?php echo $value->guid;   ?>"><?php _e('Learn more'); ?></a>
                                    </p>
                                </div>
                            </div> 
                            <div class="mask" >
                                <div class="title-wrapper nxs-colorzen nxs-colorzen-base1-a0-8 ">
                                    <h4 class="nxs-title "><?php echo $value->post_title; ?></h4>
                                </div>
                            </div>				
                        </div> <!-- END default -->
                        <!-- FALLBACK SCENARIO -->
                        <div class="transition nxs-fallback">
                            <div>
                                <h4 class="nxs-title  nxs-heightiq nxs-heightiq-p1-title " style="height: 0px;"><?php echo $value->post_title; ?></h4>
                                <div class="nxs-clear nxs-filler"></div>
                                <div class="nxs-relative">
                                    <a href="<?php echo $value->guid; ?>">
                                        <div class="nxs-image-wrapper nxs-shadow nxs-stretch  ">
                                            <div class="nxs-overflow nxs-border-width-0-0 ">
                                                <img class="" src="<?php echo $image_url[0] ?>">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nxs-clear nxs-filler"></div>
                                <p class="nxs-default-p nxs-applylinkvarcolor nxs-padding-bottom0  nxs-heightiq nxs-heightiq-p1-text " style="height: 0px;">
                                    <?php the_field('short_description', $value->ID); ?> </p>
                                <div class="nxs-clear nxs-filler"></div>
                                <p class=" nxs-padding-bottom0">
                                    <a target="_self" class="nxs-button nxs-button-scale-1-2  nxs-colorzen nxs-colorzen-c22  " href="<?php echo $value->guid; ?>"><?php _e('Learn more'); ?></a>
                                </p>
                            </div>
                            <div class="nxs-clear"></div>
                        </div> <!-- END fallback --> 
                    </div>
                </div>
            </div>
        </div>
    </li>
<?php
    $i++;
    if ($i % 3 == 0) {
        $i = 0;
        echo '       </ul>
                        <div class="nxs-clear"></div>
                    </div> <!-- nxs-row-container -->
                </div>';
    }
}
wp_reset_postdata();
?>
<!-- start Loop -->