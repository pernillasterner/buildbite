<?php 
get_header(); 
?>
<?php if ( have_posts() ) : ?>
	<main id="main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>


			<article class="container-fluid">
                <?php 
                // Getting all moduls
                if( have_rows('moduls') ) {
                    while( have_rows('moduls') ) {
                        the_row();
                      
                        if(get_row_layout() == 'features') :
                            get_template_part( 'templates/moduls/' . get_row_layout());
                        else :
                            get_template_part( 'templates/components/' . get_row_layout() );
                        endif;
                    }
                }
                ?>
			</article>


		<?php endwhile; ?>

	</main><!-- /#main -->
<?php endif; ?> <!-- End if post -->
<?php get_footer(); ?>