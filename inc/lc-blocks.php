<?php
/**
 * Register ACF blocks for the lc-mindspace theme.
 *
 * This file defines and registers custom ACF blocks.
 *
 * @package lc-simply2026
 */

/**
 * Register ACF blocks.
 *
 * @return void
 */
function acf_blocks() {
	if ( function_exists( 'acf_register_block_type' ) ) {

		// INSERT NEW BLOCKS HERE.

		acf_register_block_type(
			array(
				'name'            => 'lc_divider',
				'title'           => __( 'LC Divider' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-divider.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
                    'color'     => array(
            'background' => true,
            'text'       => true,
          ),
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_small_print',
				'title'           => __( 'LC Small Print' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-small-print.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
                    'color'     => array(
            'background' => true,
            'text'       => true,
          ),
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_highlight_card',
				'title'           => __( 'LC Highlight Card' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-highlight-card.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
                    'color'     => array(
            'background' => true,
            'text'       => true,
          ),
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_packages',
				'title'           => __( 'LC Packages' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-packages.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
                    'color'     => array(
            'background' => true,
            'text'       => true,
          ),
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_contact',
				'title'           => __( 'LC Contact' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-contact.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_cta',
				'title'           => __( 'LC CTA' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-cta.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
					'color'     => array(
						'background' => true,
						'text'       => true,
					),
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_text_image',
				'title'           => __( 'LC Text Image' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-text-image.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
					'color'     => array(
						'background' => true,
						'text'       => true,
					),
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_usps',
				'title'           => __( 'LC USPs' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-usps.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_testimonial_slider',
				'title'           => __( 'LC Testimonial Slider' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-testimonial-slider.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
					'color'     => array(
						'background' => true,
						'text'       => true,
					),
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_how_steps',
				'title'           => __( 'LC How Steps' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-how-steps.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_services',
				'title'           => __( 'LC Services' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-services.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
					'color'     => array(
						'background' => true,
						'text'       => true,
					),
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_hero',
				'title'           => __( 'LC Hero' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-hero.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

	}
}
add_action( 'acf/init', 'acf_blocks' );

// Gutenburg core modifications.
add_filter( 'register_block_type_args', 'core_image_block_type_args', 10, 3 );
add_filter( 'render_block_data', 'track_column_context', 1, 1 );

/**
 * Track when rendering column blocks.
 *
 * @param array $parsed_block Block data.
 * @return array Block data.
 */
function track_column_context( $parsed_block ) {
	static $column_depth = 0;

	if ( isset( $parsed_block['blockName'] ) && 'core/column' === $parsed_block['blockName'] ) {
		++$column_depth;
		$GLOBALS['lc_inside_column'] = true;

		// Decrement after this block finishes.
		add_filter(
			'render_block',
			function ( $content, $block ) use ( &$column_depth ) {
				if ( isset( $block['blockName'] ) && 'core/column' === $block['blockName'] ) {
					$column_depth--;
					$GLOBALS['lc_inside_column'] = $column_depth > 0;
				}
				return $content;
			},
			PHP_INT_MAX,
			2
		);
	}

	return $parsed_block;
}

/**
 * Modify core block type arguments to add custom render callbacks.
 *
 * @param array  $args Block type arguments.
 * @param string $name Block type name.
 * @return array Modified block type arguments.
 */
function core_image_block_type_args( $args, $name ) {
	if ( 'core/paragraph' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
	}
	if ( 'core/heading' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
	}
	if ( 'core/list' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
	}

	return $args;
}

/**
 * Modify core block content by wrapping it in a container.
 *
 * @param array  $attributes Block attributes.
 * @param string $content Block content.
 * @return string Modified block content.
 */
function modify_core_add_container( $attributes, $content ) {
	// Don't wrap if inside a column.
	if ( ! empty( $GLOBALS['lc_inside_column'] ) ) {
		// Still handle fa-list conversion.
		if ( isset( $attributes['className'] ) && strpos( $attributes['className'], 'fa-list' ) !== false ) {
			$icon_class = 'fa-check';
			if ( preg_match( '/fa-list\s+(fa-[\w-]+)/', $attributes['className'], $matches ) ) {
				$icon_class = $matches[1];
			}
			$content = convert_to_fa_list( $content, $icon_class );
		}
		return $content;
	}

	ob_start();

	// Check if this is a list block with fa-list class.
	if ( isset( $attributes['className'] ) && strpos( $attributes['className'], 'fa-list' ) !== false ) {
		// Extract icon class if specified (e.g., fa-list fa-check becomes fa-check).
		$icon_class = 'fa-check'; // default icon.
		if ( preg_match( '/fa-list\s+(fa-[\w-]+)/', $attributes['className'], $matches ) ) {
			$icon_class = $matches[1];
		}

		// Convert to FontAwesome list.
		$content = convert_to_fa_list( $content, $icon_class );
	}

	?>
<div class="container-xl">
	<?= wp_kses_post( $content ); ?>
</div>
	<?php
	$content = ob_get_clean();
	return $content;
}

