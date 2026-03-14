<?php
/**
 * Block template for LC CTA.
 *
 * @package lc-simply2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg         = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg         = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';
$section_id = $block['anchor'] ?? null;
$extra      = $block['className'] ?? 'py-5';

$button = get_field( 'lc_cta_button' );

?>
<section class="lc-cta <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container text-center">
		<h2 class="mb-4"><?= esc_html( get_field( 'lc_cta_title' ) ); ?></h2>
		<?php
		if ( $button ) {
			echo '<a href="' . esc_url( $button['url'] ) . '" class="button button-primary">' . esc_html( $button['title'] ) . '</a>';
		}
		?>
	</div>
</section>
