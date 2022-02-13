<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4293e854d5.js" crossorigin="anonymous"></script>
    <?php the_field('tracking_code_header', 'option') ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php the_field('tracking_code_body', 'option') ?>
	<!-- <div class="loader_container" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; width: 100%; background: #fff; z-index: 9999999;"></div> -->
	<?php get_template_part( 'templates/nav' );  ?>