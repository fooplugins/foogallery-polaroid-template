<?php
/**
 * FooGallery masonry gallery template
 */
global $current_foogallery;
global $current_foogallery_arguments;
$size = foogallery_gallery_template_setting( 'thumbnail_size', 'thumbnail' );
$link = foogallery_gallery_template_setting( 'thumbnail_link', 'image' );
$lightbox = foogallery_gallery_template_setting( 'lightbox', 'unknown' );
?>
<ul class="foogallery-container foogallery-polaroid foogallery-lightbox-<?php echo $lightbox; ?>">
	<?php foreach ( $current_foogallery->attachments() as $attachment_id ) {
		echo '<li>' . foogallery_get_attachment_html( $attachment_id, $size, $link ) . '</li>';
	} ?>
</ul