<?php
/**
 * Template Name: Text Page
 *
 * Template for displaying text pages.
 *
 * @package lc-simply2026
 */

defined('ABSPATH') || exit;

get_header();
?>
<main id="main">
	<?php
	the_post();    
	the_content(); 
	?>
</main>
<?php
get_footer();