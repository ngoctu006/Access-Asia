<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 ?>


<?php
/*
  Template Name: Template sidebar
 */
get_header();
?>
<div id="nxs-content-container" class="nxs-containsimmediatehovermenu has-sidebar">
    <div class="nxs-main">
        <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>
        <!-- FRACTIONMARKER.start -->				
        
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