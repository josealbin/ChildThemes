<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/fontawesome.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/custom.css'; ?>">
</head>

<?php
  $page = str_replace(array('/', '.php', '?pg='), '', $_SERVER['REQUEST_URI']);
  $page = $page ? $page : 'default';

?>

<body id="<?php echo $page ?>" <?php body_class(); ?>> 
<?php wp_body_open(); ?>





<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
