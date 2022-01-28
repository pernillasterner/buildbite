<?php get_header(); ?>
<?php if(have_posts()) : ?>
<main id="blog-roll" role="main">
	<article class="container">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('templates/post'); ?>
			<?php endwhile; ?>
		</div>
	</article>
</main><!-- /#main -->
<?php endif; ?>
<?php get_footer(); ?>