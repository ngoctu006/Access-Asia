<?php
get_header();
?>
<div id="nxs-content-container" class="nxs-containsimmediatehovermenu has-sidebar">
    <div class="nxs-main">
        <?php
		// Start the loop.
		while ( have_posts() ) : the_post();
                    get_template_part( 'content','single');
		// End the loop.
		endwhile;
	?>
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