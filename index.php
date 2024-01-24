function disable_image_sizes( $sizes ) {
  unset( $sizes['small']);
  unset( $sizes['thumbnail'] );
  unset( $sizes['medium'] );
  unset( $sizes['medium_large'] );
  unset( $sizes['large'] );
  unset( $sizes[ '1536x1536' ]);
  unset( $sizes[ '2048x2048' ]);
  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'disable_image_sizes' );
add_filter( 'big_image_size_threshold', '__return_false' );
