<?php
/**
 * FooGallery Polaroid Gallery Template
 *
 * Adds a new gallery template to FooGallery, which uses a popular polaroid layout and effect
 *
 * @package   FooGalleryPolaroidGalleryTemplate
 * @author    Brad Vincent <brad@fooplugins.com>
 * @license   GPL-2.0+
 * @link      https://github.com/fooplugins/foogallery-media-menu-extension
 * @copyright 2014 FooPlugins LLC
 *
 * @wordpress-plugin
 * Plugin Name: FooGallery - Polaroid Gallery Template Extension
 * Description: Adds an Polaroid Gallery Template
 * Version:     1.0.1
 * Author:      bradvin
 * Author URI:  http://fooplugins.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( !class_exists( 'FooGallery_Polaroid_Template_Extension' ) ) {
	class FooGallery_Polaroid_Template_Extension {

		function __construct() {
			add_filter( 'foogallery_gallery_templates', array( $this, 'add_template' ) );
			add_filter( 'foogallery_gallery_templates_files', array( $this, 'register_myself' ) );
		}

		function register_myself( $extensions ) {
			$extensions[] = __FILE__;
			return $extensions;
		}

		function add_template( $gallery_templates ) {

			$gallery_templates[] = array(
				'slug'        => 'polaroid',
				'name'        => __( 'Polaroid Image Gallery', 'foogallery'),
				'fields'	  => array(
					array(
						'id'      => 'thumbnail_size',
						'title'   => __('Thumbnail Size', 'foogallery'),
						'desc'    => __('Choose the size of your thumbnails.', 'foogallery'),
						'type'    => 'thumb_size',
						'default' => array(
							'width' => get_option( 'thumbnail_size_w' ),
							'height' => get_option( 'thumbnail_size_h' ),
							'crop' => true
						)
					),

					array(
						'id'      => 'thumbnail_link',
						'title'   => __('Thumbnail Link', 'foogallery'),
						'default' => 'image' ,
						'type'    => 'thumb_link',
						'spacer'  => '<span class="spacer"></span>',
						'desc'	  => __('You can choose to link each thumbnail to the full size image, or to the image\'s attachment page, or you can choose to not link to anything.', 'foogallery')
					),
					array(
						'id'      => 'lightbox',
						'title'   => __('Lightbox', 'foogallery'),
						'desc'    => __('Choose which lightbox you want to use in the gallery.', 'foogallery'),
						'type'    => 'lightbox',
					),
				)
			);

			return $gallery_templates;
		}
	}
}