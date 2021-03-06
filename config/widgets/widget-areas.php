<?php
/**
 * Sidebars and widget area runtime configuration
 *
 * @package     inpromenad\widgets
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     GNU General Public License 2.0+
 */
namespace inpromenad\widgets;

return array(
	'unregister_widget_areas' => array(
		'sidebar',
		'sidebar-alt',
		'header-right',
	),

	'register_widget_areas' => array(
		array(
			'id'          => 'front-page-primary',
			'name'        => __( 'zone primaire', 'ktc' ),
			'description' => __( 'This is the first widget area', 'inpromenad' ),
		),

		array(
			'id'          => 'front-page-secondary',
			'name'        => __( 'zone secondaire', 'ktc' ),
			'description' => __( 'This is the second widget area', 'inpromenad' ),
		),

	),
);
