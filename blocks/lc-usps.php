<?php
/**
 * Block template for LC USPs.
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
<section class="lc-usps <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container pt-5">
		<h2 class="text-center mb-5"><?= esc_html( get_field( 'lc_usps_title' ) ); ?></h2>
		<div class="row mb-4">
			<?php
			if ( have_rows( 'lc_usps_list' ) ) {
				while ( have_rows( 'lc_usps_list' ) ) {
					the_row();
					?>
					<div class="col-md-6 mb-4 d-flex">
						<?= lc_sanitise_svg( get_stylesheet_directory() . '/img/icons/check.svg', 'usp-icon' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<div class="usp-item h-100">
							<h3 class="usp-title"><?= esc_html( get_sub_field( 'usp_title' ) ); ?></h3>
							<div class="usp-description"><?= wp_kses_post( get_sub_field( 'usp_description' ) ); ?></div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
		<div class="text-center">
			<?php
			if ( get_field( 'button' ) ) {
				$button = get_field( 'button' );
				echo '<a href="' . esc_url( $button['url'] ) . '" class="button button-primary">' . esc_html( $button['title'] ) . '</a>';
			}
			?>
		</div>
	</div>
</section>