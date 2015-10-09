<div class="wrap-new nxs-padding-top-1-0 nxs-row nxs-not-unistyled nxs-colorzen nxs-colorzen-base1  nxs-padding-top-2-0   nxs-rowtemplate-one  " id="nxs-pagerow-prid1178114653">
    <div class="nxs-row-container nxs-containsimmediatehovermenu nxs-row1">
        <ul class="nxs-placeholder-list">
            <?php
            $args = array(
                'posts_per_page' => 2,
                'offset' => 0,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish',
                'suppress_filters' => true
            );
            $new_post = new Wp_Query( $args);
            while ( $new_post->have_posts() ) {
            $new_post->the_post();
            ?>
            <li class="nxs-placeholder nxs-containshovermenu1 nxs-runtime-autocellsize nxs-one-half nxs-margin-bottom-0-0  nxs-unistyle-main nxs-unistyled nxs-not-unicontented nxs-widgettype-banner  nxs-column-1-1 nxs-column-lastinrow">
                <div class="ABC  ">
                    <div class="XYZ nxs-valign-middle ">
                        <div class="nxs-placeholder-content-wrap nxs-crop "> 
                            <div id="nxs-widget-l1184584496" class="nxs-widget nxs-widget-l1184584496  nxs-banner nxs-blog padding-25 justify">
                                <div class="nxs-blogentry nxs-relative ">
                                    <div class="sharecounters">
                                    </div>
                                    <div class="info-wrapper">
                                        <h3 class="nxs-title nxs-applylinkvarcolor  ">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                the_title();
                                                ?>
                                            </a>
                                        </h3>
                                        <div class="nxs-applylinkvarcolor">
                                            <div class="nxs-blog-meta">
                                                <?php 
                                                   echo  get_the_date('M d, Y',get_the_ID() );
                                                ?>
                                            </div>
                                            <div class="nxs-blog-sharing"></div>
                                            <div class="nxs-clear"></div>
                                        </div>
                                    </div>
                                    <div class="nxs-relative">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="nxs-image-wrapper  nxs-icon-width-1-5  ">
                                                <div  class="nxs-overflow nxs-border-width-0-0 ">
                                                    <?php
                                                        if(has_post_thumbnail()){
                                                            the_post_thumbnail('thumbnail');
                                                        }else{
                                                            echo '<img class=" " src="http://securitycompany.catalog.c1.us-e1.nexusthemes.com/wp-content/uploads/2015/01/article1-200x200.jpg?quality=100.3015100721490" alt="Pellentesque habitant morbi tristique senectus" title="">;';
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nxs-default-p nxs-padding-bottom0 ">
                                        <?php 
                                            the_content();
                                        ?>

                                    </div>
                                    <p class="nxs-align-right nxs-padding-bottom0">
                                        <a class="nxs-button nxs-button-scale-1-2  nxs-colorzen nxs-colorzen-c22 " href="<?php the_permalink() ?>"><?php _e('Read more'); ?></a>
                                    </p>
                                    <div class="nxs-clear nxs-padding-top20"></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </li>
            <?php } wp_reset_postdata(); ?>
        </ul>
        <div class="nxs-clear"></div>
    </div> <!-- nxs-row-container -->
</div>