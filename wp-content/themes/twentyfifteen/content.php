<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
    $image_id = get_post_thumbnail_id($value->ID);
    $image_url = wp_get_attachment_image_src($image_id, 'full', true);
?>
<div class="nxs-blogentry nxs-relative ">
    <div class="sharecounters"></div>
    <div class="info-wrapper">
        <h3 class="nxs-title nxs-applylinkvarcolor  ">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h3><div class="nxs-applylinkvarcolor"><div class="nxs-blog-meta">
            <?php 
                echo  get_the_date('M d, Y',get_the_ID() );
            ?>
            </div>
            <div class="nxs-blog-sharing"></div>
            <div class="nxs-clear"></div>
                
        </div>

    </div> 
    <div class="nxs-relative">
        <a href="<?php the_permalink() ?>">
            <div class="nxs-image-wrapper  nxs-icon-width-1-5  ">
                <div class="nxs-overflow nxs-border-width-0-0 ">
                    <?php if($image_url){ ?>
                        <img class=" " src="<?php echo $image_url[0]; ?>" alt="<?php the_title() ?>" title="<?php the_title() ?>">
                    <?php } ?>
                </div>
            </div>
        </a>
    </div>
    <p class="nxs-default-p nxs-padding-bottom0 ">
        <?php the_excerpt(); ?>
     </p>
    <p class="nxs-align-right nxs-padding-bottom0">
        <a class="nxs-button nxs-button-scale-1-2  nxs-colorzen nxs-colorzen-c22 " href="<?php the_permalink() ?>"><?php _e('Read more'); ?></a>
    </p>
    <div class="nxs-clear nxs-padding-top20"></div>
</div>