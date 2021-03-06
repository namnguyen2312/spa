<?php
/**
 * This file belongs to the YIT Plugin Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

$image_size = array(
	'name'     => __( 'Image size', 'ywzm' ),
	'desc'     => __( 'The size of the images used within the magnifier box', 'ywzm' ),
	'id'       => 'woocommerce_magnifier_image',
	'css'      => '',
	'type'     => 'yith_ywzm_image_width',
	'default'  => array(
		'width'  => 600,
		'height' => 600,
		'crop'   => true
	),
	'std'      => array(
		'width'  => 600,
		'height' => 600,
		'crop'   => true
	),
	'desc_tip' => true
);

$general_settings = array(
	array(
		'name' => __( 'General Settings', 'ywzm' ),
		'type' => 'title',
		'desc' => '',
		'id'   => 'yith_wcmg_general'
	),
	array(
		'name'    => __( 'Activate YITH WooCommerce Zoom Magnifier', 'ywzm' ),
		'desc'    => __( 'Activate the plugin or use the WooCommerce default product image.', 'ywzm' ),
		'id'      => 'yith_wcmg_enable_plugin',
		'std'     => 'yes',
		'default' => 'yes',
		'type'    => 'checkbox'
	),
	array(
		'name'    => __( 'Activate on mobile device', 'ywzm' ),
		'desc'    => __( 'Set if zoom and slider functionalities should be shown also on mobile devices.', 'ywzm' ),

		'id'      => 'yith_wcmg_enable_mobile',
		'std'     => 'yes',
		'default' => 'yes',
		'type'    => 'checkbox'
	),
	array(
		'name'    => __( 'Forced Image Size', 'ywzm' ),
		'desc'    => __( 'If disabled, you will able to customize the sizes of the zoomed images. Disable it at your own risk; the magnifier could not properly work with images out of proportion.', 'ywzm' ),
		'id'      => 'yith_wcmg_force_sizes',
		'std'     => 'yes',
		'default' => 'yes',
		'type'    => 'checkbox'
	),
	array(
		'type' => 'sectionend',
		'id'   => 'yith_wcmg_general_end'
	)
);

$magnifier_settings = array(
	array(
		'name' => __( 'Magnifier Settings', 'ywzm' ),
		'type' => 'title',
		'desc' => '',
		'id'   => 'yith_wcmg_magnifier'
	),
	'zoom_box_width'    => array(
		'name'    => __( 'Zoom Box Width', 'ywzm' ),
		'desc'    => __( 'The width of the magnifier box (default: auto)', 'ywzm' ),
		'id'      => 'yith_wcmg_zoom_width',
		'std'     => 'auto',
		'default' => 'auto',
		'type'    => 'text',
	),
	array(
		'name'    => __( 'Zoom Box Height', 'ywzm' ),
		'desc'    => __( 'The height of the magnifier box (default: auto)', 'ywzm' ),
		'id'      => 'yith_wcmg_zoom_height',
		'std'     => 'auto',
		'default' => 'auto',
		'type'    => 'text',
	),
	$image_size,
	'zoom_box_position' => array(
		'name'    => __( 'Zoom Box Position', 'ywzm' ),
		'desc'    => __( 'The magnifier position', 'ywzm' ),
		'id'      => 'yith_wcmg_zoom_position',
		'std'     => 'right',
		'default' => 'right',
		'type'    => 'select',
		'options' => array(
			'right'  => __( 'Right', 'ywzm' ),
			'inside' => __( 'Inside', 'ywzm' )
		)
	),
	array(
		'name'    => __( 'Zoom Box Position for mobile devices', 'ywzm' ),
		'desc'    => __( 'The magnifier position for the mobile devices (iPhone, Android, etc.)', 'ywzm' ),
		'id'      => 'yith_wcmg_zoom_mobile_position',
		'std'     => 'default',
		'default' => 'inside',
		'type'    => 'select',
		'options' => array(
			'default' => __( 'Default', 'ywzm' ),
			'inside'  => __( 'Inside', 'ywzm' ),
			'disable' => __( 'Disable', 'ywzm' )
		)
	),
	array(
		'name'    => __( 'Loading label', 'ywzm' ),
		'desc'    => '',
		'id'      => 'yith_wcmg_loading_label',
		'std'     => __( 'Loading...', 'ywzm' ),
		'default' => __( 'Loading...', 'ywzm' ),
		'type'    => 'text',
	),
	array(
		'name'    => __( 'Lens Opacity', 'ywzm' ),
		'desc'    => '',
		'id'      => 'yith_wcmg_lens_opacity',
		'std'     => 0.5,
		'default' => 0.5,
		'type'    => 'slider',
		'min'     => 0,
		'max'     => 1,
		'step'    => .1
	),
	array(
		'name'    => __( 'Blur', 'ywzm' ),
		'desc'    => __( 'Add a blur effect to the small image on mouse hover.', 'ywzm' ),
		'id'      => 'yith_wcmg_softfocus',
		'std'     => 'no',
		'default' => 'no',
		'type'    => 'checkbox'
	),
	array( 'type' => 'sectionend', 'id' => 'yith_wcmg_magnifier_end' )
);

$slider_settings = array(
	array(
		'name' => __( 'Slider Settings', 'ywzm' ),
		'type' => 'title',
		'desc' => '',
		'id'   => 'yith_wcmg_slider'
	),
	array(
		'name'    => __( 'Activate Slider', 'ywzm' ),
		'desc'    => __( 'Activate Thumbnail Slider.', 'ywzm' ),
		'id'      => 'yith_wcmg_enableslider',
		'std'     => 'yes',
		'default' => 'yes',
		'type'    => 'checkbox'
	),
	array(
		'name'    => __( 'Activate Responsive Slider', 'ywzm' ),
		'desc'    => __( 'This option fits the thumbnails within the available space. Disable it if you want to manage freely the thumbnails (eg. add margins, paddings, etc.)', 'ywzm' ),
		'id'      => 'yith_wcmg_slider_responsive',
		'std'     => 'yes',
		'default' => 'yes',
		'type'    => 'checkbox'
	),
	array(
		'name'    => __( 'Items', 'ywzm' ),
		'desc'    => __( 'Number of items to show', 'ywzm' ),
		'id'      => 'yith_wcmg_slider_items',
		'std'     => 3,
		'default' => 3,
		'type'    => 'slider',
		'min'     => 1,
		'max'     => 10,
		'step'    => 1
	),
	array(
		'name'    => __( 'Circular carousel', 'ywzm' ),
		'desc'    => __( 'It defines whether the carousel should be circular.', 'ywzm' ),
		'id'      => 'yith_wcmg_slider_circular',
		'std'     => 'yes',
		'default' => 'yes',
		'type'    => 'checkbox'
	),
	array(
		'name'    => __( 'Infinite carousel', 'ywzm' ),
		'desc'    => __( 'It defines whether the carousel should be infinite. Note: It is possible to create a non-circular, infinite carousel, but it is not possible to create a circular, non-infinite carousel.', 'ywzm' ),
		'id'      => 'yith_wcmg_slider_infinite',
		'std'     => 'yes',
		'default' => 'yes',
		'type'    => 'checkbox'
	),
	array( 'type' => 'sectionend', 'id' => 'yith_wcmg_slider_end' )
);

$general_settings   = apply_filters( 'yith_ywzm_general_settings', $general_settings );
$magnifier_settings = apply_filters( 'yith_ywzm_magnifier_settings', $magnifier_settings );
$slider_settings    = apply_filters( 'yith_ywzm_slider_settings', $slider_settings );

$options['general'] = array();

if ( ! defined( 'YITH_YWZM_PREMIUM' ) ) {
	$intro_tab = array(
		'section_general_settings_videobox' => array(
			'name'    => __( 'Upgrade to the PREMIUM VERSION', 'ywzm' ),
			'type'    => 'videobox',
			'default' => array(
				'plugin_name'               => __( 'YITH WooCommerce Zoom Magnifier', 'ywzm' ),
				'title_first_column'        => __( 'Discover The Advanced Features', 'ywzm' ),
				'description_first_column'  => __( 'Upgrade to the PREMIUM VERSION of YITH WOOCOMMERCE ZOOM MAGNIFIER to benefit from all features!', 'ywzm' ),
				'video'                     => array(
					'video_id'          => '122436840',
					'video_image_url'   => YITH_YWZM_ASSETS_IMAGES_URL . 'yith-woocommerce-zoom-magnifier-video.jpg',
					'video_description' => __( 'See YITH WooCommerce Zoom Magnifier plugin with full premium features in action', 'ywzm' ),
				),
				'title_second_column'       => __( 'Get Support and Pro Features', 'ywzm' ),
				'description_second_column' => __( 'Purchasing the premium version of the plugin, you will take advantage of the advanced features of the product, and you will get one year of free updates and support through our platform available 24h/24.', 'ywzm' ),
				'button'                    => array(
					'href'  => YITH_YWZM_Plugin_FW_Loader::get_instance()->get_premium_landing_uri(),
					'title' => 'Get Support and Pro Features'
				)
			),
			'id'      => 'yith_wcas_general_videobox'
		)
	);

	$options['general'] = $intro_tab;
}

$options['general'] = array_merge( $options['general'], $general_settings, $magnifier_settings, $slider_settings );

return apply_filters( 'yith_wcmg_tab_options', $options );