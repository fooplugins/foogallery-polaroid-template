<?php
/**
 * FooGallery masonry gallery template
 */
global $current_foogallery;
global $current_foogallery_arguments;
$args = foogallery_gallery_template_setting( 'thumbnail_size', array() );
$args['link'] = foogallery_gallery_template_setting( 'thumbnail_link', 'image' );
$lightbox = foogallery_gallery_template_setting( 'lightbox', 'unknown' );
?>
<ul class="foogallery-container foogallery-polaroid foogallery-lightbox-<?php echo esc_attr($lightbox); ?>">
	<?php foreach ( $current_foogallery->attachments() as $attachment ) {
		echo '<li>' . $attachment->html( $args ) . '</li>';
	} ?>
</ul>