<div class="nxs-row nxs-not-unistyled  nxs-rowtemplate-one  " id="nxs-pagerow-prid1090465174">
    <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
        <ul class="nxs-placeholder-list"> 
            <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-whole nxs-unistyle-sidebar nxs-unistyled nxs-not-unicontented nxs-widgettype-blog  nxs-column-1-1 nxs-column-lastinrow">
                <div class="ABC  nxs-colorzen nxs-colorzen-base1  nxs-border-radius-2-0  nxs-border-width-1-0  ">
                    <div class="XYZ nxs-padding-1-0  nxs-valign-middle ">
                        <div class="nxs-placeholder-content-wrap nxs-crop ">  
                            <div id="nxs-widget-l1310014354" class="nxs-widget nxs-widget-l1310014354  nxs-blog ">
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