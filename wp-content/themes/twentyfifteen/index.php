<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>
<div id="nxs-content-container" class="nxs-containsimmediatehovermenu has-no-sidebar">

    <!-- FRACTIONMARKER.start -->				
    <div class="nxs-article-container nxs-widgets-editable nxs-elements-container nxs-post-8 ">
        <div class="nxs-postrows ui-sortable">
            <?php
                include __DIR__.'/templates/part_service.php';
                include __DIR__.'/templates/part_welcome.php';
                include __DIR__.'/templates/part_partner.php';
            ?>
        </div>				 
    </div> 			
    <div class="nxs-clear"></div>
</div>
<?php get_footer(); ?>
