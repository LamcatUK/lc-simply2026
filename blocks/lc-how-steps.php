<?php
/**
 * Block template for LC How Steps.
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
<section class="lc-how-steps <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container pt-5">
		<h2 class="text-center"><?= esc_html( get_field( 'lc_how_steps_title' ) ); ?></h2>
		<div class="ch-75 mx-auto text-center fs-500 mb-5"><?= esc_html( get_field( 'lc_how_steps_intro' ) ); ?></div>
		<div class="row my-4">
			<?php
			if ( have_rows( 'lc_how_steps_list' ) ) {
				$step_number = 0;
				while ( have_rows( 'lc_how_steps_list' ) ) {
					the_row();
					$stagger_index = $step_number % 3;
					++$step_number;
					?>
					<div class="col-md-4 mb-4">
						<div class="step-item p-3 h-100" data-aos="fade-up" data-aos-delay="0" data-stagger-index="<?= esc_attr( $stagger_index ); ?>">
							<?= lc_sanitise_svg( get_stylesheet_directory() . '/img/icons/' . $step_number . '-circle-fill.svg', 'step-icon' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<h3 class="step-title"><?= esc_html( get_sub_field( 'step_title' ) ); ?></h3>
							<div class="step-description"><?= wp_kses_post( get_sub_field( 'step_description' ) ); ?></div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>