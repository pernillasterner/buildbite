<?php
$bgcolor = get_sub_field('bgcolor');
$show_breadcrumbs = get_sub_field('show_breadcrumbs');
$header = get_sub_field('header');
$header_tag = get_sub_field('header_tag');
$content = get_sub_field('content');
$show_share = get_sub_field('show_share');
?>

<section class="component component_content <?php echo $bgcolor; ?>">
	<?php if($show_breadcrumbs) : ?>
		<?php echo breadcrumbs(); ?>
	<?php endif; ?>
	<?php if($header) : ?>
		<?php echo '<' . $header_tag . ' class="h1 container-fluid">' . $header . '</' . $header_tag . '>'; ?>
	<?php endif; ?>
	<div class="container-fluid editor_content">
		<?php echo $content; ?>
	</div>

	<?php if($show_share) : ?>
		<?php echo solidengineer_share(); ?>
	<?php endif; ?>
</section>