<?php
/**
 * Block template for LC Divider.
 *
 * @package lc-simply2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg         = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg         = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';
$section_id = $block['anchor'] ?? null;
$extra      = $block['className'] ?? '';

?>
<section class="lc-divider <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container">
		<div class="lc-divider__inner" aria-hidden="true">
			<span class="lc-divider__icon">
				<?= lc_sanitise_svg( get_stylesheet_directory() . '/img/icons/check.svg', '', 24, 24 ); ?>
			</span>
		</div>
	</div>
</section>
