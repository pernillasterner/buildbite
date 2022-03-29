<?php
$header = get_sub_field('header');
$header_tag = get_sub_field('header_tag');
$content = get_sub_field('content');
?>

<section class="component component_content">

	<div class="container">
		<?php if($header) : ?>
			<?php echo '<' . $header_tag . ' class="h1 container-fluid">' . $header . '</' . $header_tag . '>'; ?>
		<?php endif; ?>
		<div class="container-fluid editor_content">
			<?php echo $content; ?>
		</div>
    </div>

</section>