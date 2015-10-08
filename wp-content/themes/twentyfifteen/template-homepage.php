<?php
/*
  Template Name: Template homepate
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