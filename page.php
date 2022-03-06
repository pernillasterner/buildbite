<?php get_header(); ?>

<main id="main" role="main">
    <article class="page-wrapper">
        <?php while (have_posts() ) : the_post(); ?>
            <?php if (have_rows( 'page_components' ) ) : ?>
                <?php while( have_rows( 'page_components' ) ) : the_row(); ?>
                    <?php 
                        // Check if the date of the component is set
                        if( get_sub_field('show_date_fields') ) :
                            $date = get_sub_field('component_date');
                            $today = date('Y-m-d H:i');
                            if(isset($date['date_from']) && $date['date_from'] > $today) : 
                                continue;
                            endif;
                            if(isset($date['date_to']) && $date['date_to'] <= $today) : 
                                continue;
                            endif;
                        endif;
                    ?>
                    <?php 
                        if(get_row_layout() == 'global-components') :
                            $layout = get_sub_field('global-components');
                            $name = get_the_title($layout);
                            $slug = sanitize_title($name);
                            get_template_part( 'templates/components/globals/' . $slug );
                        else : 
                            get_template_part( 'templates/components/' . get_row_layout() );
                        endif;
                    ?>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php get_template_part( 'templates/moduls/get_started_modul'); ?>
    </article>
</main><!-- /#main -->

<?php get_footer(); ?>