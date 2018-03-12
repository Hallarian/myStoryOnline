<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">



	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	<!-- load scripts for booklet.js -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script> window.jQuery || document.write('<script src="booklet/jquery-2.1.0.min.js"><\/script>') </script>
	<script src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/booklet/jquery.easing.1.3.js"></script>
	<script src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/booklet/jquery.booklet.latest.min.js"></script>
	<script>
	var um_scripts = {"ajaxurl":"http:\/\/mystoryonline.org\/wp-admin\/admin-ajax.php","fileupload":"http:\/\/mystoryonline.org\/wp-content\/plugins\/ultimate-member\/core\/lib\/upload\/um-file-upload.php","imageupload":"http:\/\/mystoryonline.org\/wp-content\/plugins\/ultimate-member\/core\/lib\/upload\/um-image-upload.php"};
	</script>


</head>

<body <?php body_class(); ?> >
<div>
	

		<div>
