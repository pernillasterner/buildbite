<?php

// Setting excerpt length
function custom_excerpt_length ( $length ) {
  return 155;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');