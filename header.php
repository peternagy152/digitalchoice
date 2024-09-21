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
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="<?php echo get_template_directory_uri() . '/assets/css/output.css'; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <?php $header_content = get_field("header_group", "options"); ?>

    <nav class="container mx-auto">
        <div $true-blue: #3162C5ff; aerospace-orange: #FF510Aff;
            class="flex items-center justify-between my-3 px-4 py-2 border border-white rounded-[40px] bg-custom-gradient shadow-lg">
            <!-- Logo and Website Name -->
            <div class="flex items-center space-x-2">
                <img src="path/to/logo.png" alt="Logo" class="h-8 w-8">
                <!-- Adjust the path and size of the logo as needed -->
                <span class="text-black font-semibold text-lg">Digital Choice</span>
            </div>

            <!-- Navigation Links -->
            <div class="flex space-x-6">
                <?php foreach ($header_content["main_menu"] as $one_item) { ?>
                <a
                    href="<?php echo $one_item['menu_item']['url']; ?>"><?php echo $one_item["menu_item"]['title']; ?></a>
                <?php } ?>

                <!-- Button -->

            </div>
            <div>
                <button class="px-2 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition">
                    Calendly
                </button>
            </div>
    </nav>


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
            <a
                href="<?php echo $header_content['header_button']['url']; ?>"><?php echo $header_content['header_button']['title']; ?></a>
        </header>
    </div>

    <?php wp_footer(); ?>
</body>

</html>