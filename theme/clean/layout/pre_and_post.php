<?php if ($layout === 'pre-and-post') { ?>
    <div id="region-bs-main-and-pre" class="span9">
    <div class="row-fluid">
    <section id="region-bs-main" class="span8 pull-right">
<?php } else if ($layout === 'side-post-only') { ?>
    <section id="region-bs-main" class="span9">
<?php } else if ($layout === 'side-pre-only') { ?>
    <section id="region-bs-main" class="span9 pull-right">
<?php } else if ($layout === 'content-only') { ?>
    <section id="region-bs-main" class="span12">
<?php } ?>
	<?php echo $coursecontentheader; ?>
	<?php echo $OUTPUT->main_content(); ?>
	<?php echo $coursecontentfooter; ?>
    </section>


<?php if ($layout !== 'content-only') {
          if ($layout === 'pre-and-post') { ?>
            <aside id="region-pre" class="span4 desktop-first-column block-region region-content">
    <?php } else if ($layout === 'side-pre-only') { ?>
            <aside id="region-pre" class="span3 desktop-first-column block-region region-content">
    <?php } ?>
          <?php echo $side_pre; ?>
            </aside>
    <?php if ($layout === 'pre-and-post') {
          ?></div></div><?php // Close row-fluid and span9.
   }

    if ($layout === 'side-post-only' OR $layout === 'pre-and-post') { ?>
        <aside id="region-post" class="span3 block-region region-content">
        <?php echo $side_post; ?>
        </aside>
    <?php } ?>
<?php } ?>