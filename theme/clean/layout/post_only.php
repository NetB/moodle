<?php if ($layout === 'content-only') { ?>
<section id="region-bs-main" class="span12 desktop-first-column">
	<?php echo $coursecontentheader; ?>
	<?php echo $OUTPUT->main_content(); ?>
	<?php echo $coursecontentfooter; ?>
</section>
<?php } ?>


<?php if ($layout === 'pre-and-post') { ?>
<section id="region-bs-main" class="span6 desktop-first-column">
	<?php echo $coursecontentheader; ?>
	<?php echo $OUTPUT->main_content(); ?>
	<?php echo $coursecontentfooter; ?>
</section>
<aside id="region-pre" class="span3 block-region region-content">
<?php echo $side_pre; ?>
</aside>
<aside id="region-post" class="span3 block-region region-content">
<?php echo $side_post; ?>
</aside>
<?php } ?>


<?php if ($layout === 'side-pre-only' OR $layout === 'side-post-only') { ?>
<section id="region-bs-main" class="span8 desktop-first-column">
	<?php echo $coursecontentheader; ?>
	<?php echo $OUTPUT->main_content(); ?>
	<?php echo $coursecontentfooter; ?>
</section>

<aside id="region-pre" class="span4 block-region region-content">
	<?php 
		if ($layout === 'side-pre-only') { echo $side_pre; }
		else { echo $side_post; } 
	?>
</aside>
<?php } ?>