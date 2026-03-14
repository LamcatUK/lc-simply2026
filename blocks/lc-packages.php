<?php
/**
 * Block template for LC Packages.
 *
 * @package lc-simply2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg         = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg         = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';
$section_id = $block['anchor'] ?? null;
$extra      = $block['className'] ?? 'py-5';

$packages_count = count( (array) get_field( 'lc_packages_list' ) );
$column_class   = 'col-md-4';

if ( $packages_count > 0 && 0 === $packages_count % 3 ) {
	$column_class = 'col-md-4';
} elseif ( $packages_count > 0 && 0 === $packages_count % 2 ) {
	$column_class = 'col-md-6';
}

?>
<section class="lc-packages <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container pt-5">
		<h2 class="text-center"><?= esc_html( get_field( 'lc_packages_title' ) ); ?></h2>
		<div class="ch-75 mx-auto text-center fs-500 mb-5"><?= esc_html( get_field( 'lc_packages_intro' ) ); ?></div>
		<div class="row my-4">
			<?php
			if ( have_rows( 'lc_packages_list' ) ) {
				$item_index = 0;
				while ( have_rows( 'lc_packages_list' ) ) {
					the_row();
					$stagger_index = $item_index % 3;
					++$item_index;
					?>
					<div class="<?= esc_attr( $column_class ); ?> mb-4">
						<div class="package-card p-3 h-100" data-aos="fade-up" data-aos-delay="0" data-stagger-index="<?= esc_attr( $stagger_index ); ?>">
							<h3 class="package-name"><?= esc_html( get_sub_field( 'package_name' ) ); ?></h3>
							<?php
							if ( get_sub_field( 'package_size' ) ) {
								?>
								<div class="package-size mb-2"><?= esc_html( get_sub_field( 'package_size' ) ); ?></div>
								<?php
							}
							?>
							<div class="package-price"><?= esc_html( get_sub_field( 'package_price' ) ); ?></div>
							<div class="package-description"><?= wp_kses_post( get_sub_field( 'package_description' ) ); ?></div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
		<?php
		if ( get_field( 'lc_packages_button' ) ) {
			$button = get_field( 'lc_packages_button' );
			echo '<div class="text-center"><a href="' . esc_url( $button['url'] ) . '" class="button button-primary">' . esc_html( $button['title'] ) . '</a></div>';
		}
		?>
	</div>
</section>
