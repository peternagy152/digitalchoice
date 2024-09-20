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
<html >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="<?php echo get_template_directory_uri() . '/assets/style/style.css'; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body >
<?php $header_content = get_field("header_group", "options"); ?>

<nav class="container">
  <div class="navbar">
    <!-- Logo and Website Name -->
    <div class="logo-container">
      <img src="<?php echo $header_content['logo']; ?>" alt="" class="logo">
      <span class="website-name">Digital Choice</span>
    </div>

    <!-- Navigation Links -->
    <div class="nav-links">
      <?php foreach ($header_content["main_menu"] as $one_item) { ?>
        <a href="<?php echo $one_item['menu_item']['url']; ?>" class="nav-link">
          <?php echo $one_item["menu_item"]['title']; ?>
        </a>
      <?php } ?>
    </div>

    <!-- Mobile Menu Button -->
    <button class="mobile-menu-button" id="menu-toggle">
      <span class="menu-icon"></span>
    </button>

    <!-- Button -->
    <div class="button-container">
      <button class="calendly-button">Calendly</button>
    </div>
  </div>
</nav>

<!-- Slide-out Menu -->
<div class="mobile-menu" id="mobile-menu">
  <button class="close-button" id="close-menu">×</button>
  <div class="menu-items">
    <?php foreach ($header_content["main_menu"] as $one_item) { ?>
      <a href="<?php echo $one_item['menu_item']['url']; ?>" class="nav-link">
        <?php echo $one_item["menu_item"]['title']; ?>
      </a>
    <?php } ?>
  </div>
</div>


<h1 class="text-[20px] bg-black text-white font-bold">Kareem</h1>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <!-- LOGO -->
        <img src="<?php echo $header_content['logo']; ?>" alt="">

        <!-- Menu Items -->
        <?php foreach ($header_content["main_menu"] as $one_item) { ?>
            <a href="<?php echo $one_item['menu_item']['url']; ?>"><?php echo $one_item["menu_item"]['title']; ?></a>
        <?php } ?>

        <!-- Header Button -->
        <a href="<?php echo $header_content['header_button']['url']; ?>"><?php echo $header_content['header_button']['title']; ?></a>
    </header>
</div>

<?php  ?>
</body>
</html>
