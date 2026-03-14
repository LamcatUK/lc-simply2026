<?php
/**
 * Block template for LC Hero.
 *
 * @package lc-simply2026
 */

defined( 'ABSPATH' ) || exit;

$block_id = 'lc-hero-' . $block['id'];

$background = get_field( 'lc_hero_background' );
if ( $background ) {
	$background_url = esc_url( $background['url'] );
	echo '<style>#' . esc_attr( $block_id ) . ' { background-image: url(' . $background_url . '); }</style>';
}

?>
<section id="<?php echo esc_attr( $block_id ); ?>" class="lc-hero">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<?php
				$stagger_index = 0;
				if ( get_field( 'lc_hero_title' ) ) {
					echo '<h1 class="hero-title mb-4"  data-aos="fade-up" data-aos-delay="0" data-stagger-index="' . esc_attr( $stagger_index ) . '">' . esc_html( get_field( 'lc_hero_title' ) ) . '</h1>';
				}
				if ( get_field( 'lc_hero_intro' ) ) {
					++$stagger_index;
					echo '<div class="hero-intro" data-aos="fade-up" data-aos-delay="0" data-stagger-index="' . esc_attr( $stagger_index ) . '">' . wp_kses_post( get_field( 'lc_hero_intro' ) ) . '</div>';
				}
				if ( get_field( 'show_logos' ) ) {
					++$stagger_index;
					echo '<div class="hero-logos my-4 d-flex justify-content-center justify-content-lg-start gap-4 align-items-center flex-wrap" data-aos="fade-up" data-aos-delay="0" data-stagger-index="' . esc_attr( $stagger_index ) . '">';
					echo lc_sanitise_svg( get_stylesheet_directory() . '/img/logos/xero.svg', 'hero-logos', 60, 50 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					echo lc_sanitise_svg( get_stylesheet_directory() . '/img/logos/intuit-quickbooks.svg', 'hero-logos', 250, 60 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					echo lc_sanitise_svg( get_stylesheet_directory() . '/img/logos/sage.svg', 'hero-logos', 150, 60 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					echo '</div>';
				}
				if ( get_field( 'lc_hero_button' ) ) {
					++$stagger_index;
					$button = get_field( 'lc_hero_button' );
					echo '<a href="' . esc_url( $button['url'] ) . '" class="button button-primary" data-aos="fade-up" data-aos-delay="0" data-stagger-index="' . esc_attr( $stagger_index ) . '">' . esc_html( $button['title'] ) . '</a>';
				}
				?>
			</div>
		</div>
	</div>
</section>