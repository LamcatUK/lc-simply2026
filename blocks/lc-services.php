<?php
/**
 * Block template for LC Services.
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
<section class="lc-services <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container pt-5">
		<h2 class="text-center"><?= esc_html( get_field( 'lc_services_title' ) ); ?></h2>
		<div class="ch-75 mx-auto text-center fs-500 mb-5"><?= esc_html( get_field( 'lc_services_intro' ) ); ?></div>
		<div class="row my-4">
			<?php
			if ( have_rows( 'lc_services_list' ) ) {
				$item_index = 0;
				while ( have_rows( 'lc_services_list' ) ) {
					the_row();
					$stagger_index = $item_index % 3;
					++$item_index;
					?>
					<div class="col-md-4 mb-4">
						<div class="service-item p-3 h-100" data-aos="fade-up" data-aos-delay="0" data-stagger-index="<?= esc_attr( $stagger_index ); ?>">
							<?= lc_sanitise_svg( get_sub_field( 'service_icon' ), 'service-icon' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<h3 class="service-title"><?= esc_html( get_sub_field( 'service_title' ) ); ?></h3>
							<div class="service-description"><?= wp_kses_post( get_sub_field( 'service_description' ) ); ?></div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
		<div class="text-center">
			<?php
			if ( get_field( 'lc_services_button' ) ) {
				$button = get_field( 'lc_services_button' );
				echo '<a href="' . esc_url( $button['url'] ) . '" class="button button-primary">' . esc_html( $button['title'] ) . '</a>';
			}
			?>
		</div>
	</div>
</section>