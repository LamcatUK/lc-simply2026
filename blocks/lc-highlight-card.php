<?php
/**
 * Block template for LC Highlight Card.
 *
 * @package lc-simply2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg         = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg         = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';
$section_id = $block['anchor'] ?? null;
$extra      = $block['className'] ?? 'py-5';

?>
<section class="lc-highlight-card <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container">
		<div class="lc-highlight-card__card">
			<h3 class="lc-highlight-card__title"><?= esc_html( get_field( 'package_name' ) ); ?></h3>
			<div class="lc-highlight-card__description"><?= wp_kses_post( get_field( 'package_description' ) ); ?></div>
			<div class="lc-highlight-card__price"><?= esc_html( get_field( 'package_price' ) ); ?></div>
		</div>
	</div>
</section>
