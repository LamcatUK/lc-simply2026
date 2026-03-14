<?php
/**
 * Block template for LC Small Print.
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
<section class="lc-small-print <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container">
		<div class="lc-small-print__card">
			<h3 class="lc-small-print__title"><?= esc_html( get_field( 'small_title' ) ); ?></h3>
			<div class="lc-small-print__description"><?= lc_list( get_field( 'small_description' ), array( 'item_tag' => 'span' ) ); ?></div>
		</div>
	</div>
</section>
