<div class="nxs-row nxs-not-unistyled  nxs-rowtemplate-one  " id="nxs-pagerow-prid1102541380">
    <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
        <ul class="nxs-placeholder-list"> 
            <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-whole nxs-unistyle-sidebar nxs-unistyled nxs-not-unicontented nxs-widgettype-text  nxs-column-1-1 nxs-column-lastinrow">
                <div class="ABC">
                    <div class="XYZ nxs-valign-middle ">
                        <div class="nxs-placeholder-content-wrap nxs-crop "> 
                            <div id="nxs-widget-l1029420891" class="nxs-widget nxs-widget-l1029420891  nxs-text ">
                                <div class="nxs-applylinkvarcolor">
                                    <h2 class="nxs-title nxs-align-left  nxs-heightiq nxs-heightiq-p1-title ">
                                        <?php
                                            _e('Our Services');
                                        ?>
                                    </h2>
                                </div>
                                <div class="nxs-clear"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="nxs-clear"></div>
    </div>
</div>
<!--Loop list service-->
<?php
    $page_data = get_page_by_title('Services We Offer');
    $my_wp_query = new WP_Query();
    $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1));
    $list_child = get_page_children($page_data->ID, $all_wp_pages);
?>
<?php 
    foreach($list_child as $key=>$value){
 ?>
<div class="nxs-row nxs-not-unistyled  nxs-rowtemplate-one  " id="nxs-pagerow-prid1366077984">
    <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
        <ul class="nxs-placeholder-list"> 
            <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-whole nxs-margin-bottom-0-5  nxs-unistyle-servicebutton nxs-unistyled nxs-not-unicontented nxs-widgettype-text  nxs-column-1-1 nxs-column-lastinrow">
                <div class="ABC">
                    <div class="XYZ nxs-valign-middle " >
                        <div class="nxs-placeholder-content-wrap nxs-crop "> 
                            <div id="nxs-widget-<?php the_ID(); ?>" class="nxs-widget nxs-widget-<?php the_ID(); ?>  nxs-text ">
                                <div class="top-wrapper nxs-border-width-1-0 nxs-colorzen nxs-colorzen-c12  nxs-padding-0-3 ">
                                    <div class="nxs-table" style=""><span class="nxs-icon-referee nxs-icon-scale-1-0 "></span>
                                        <a target="_self" href="<?php the_permalink(); ?>">
                                            <h4 class="nxs-title nxs-align-left  nxs-heightiq nxs-heightiq-p1-title  nxs-fontzen nxs-fontzen-3">
                                                <?php
                                                    echo $value->post_title;
                                                ?>
                                            </h4>
                                        </a>
                                    </div>
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
<?php
    }
    wp_reset_query();
?>
