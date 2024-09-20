<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package digitalchoice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>
	<?php $header_content = get_field("header_group" , "options") ;  ?>
	<?php var_dump($header_content) ;?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
<!--  LOGO -->
  <img src="<?php echo $header_content['logo']  ; ?>" alt="">
<!--  Menu Items  -->

<?php foreach($header_content["main_menu"] as $one_item ){ ?>
<a href="<?php echo $one_item['menu_item']['url'] ;  ?>"> <?php echo $one_item["menu_item"]['title'] ; ?> </a>
  <?php } ?>


	</header>
