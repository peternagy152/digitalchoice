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
            class="flex items-center justify-between my-3 px-4 py-2 border  border-transparent rounded-[40px] bg-custom-gradient shadow-lg">
            <!-- Logo and Website Name -->
            <div class="flex items-center space-x-2">
                <img src="<?php echo $header_content['logo']; ?>" alt="" class="h-8 w-8">
                <!-- Adjust the path and size of the logo as needed -->
                <span class="text-black text-lg font-bold">Digital</span> <span
                    class=" text-primary font-bold">Choice</span>
            </div>

            <!-- Navigation Links -->
            <div class="flex space-x-6">
                <?php foreach ($header_content["main_menu"] as $one_item) { ?>
                <a
                    href="<?php echo $one_item['menu_item']['url']; ?>"><?php echo $one_item["menu_item"]['title']; ?></a>
                <?php } ?>

                <!-- Button -->

            </div>
            <div class="flex gap-x-2">
                <a href="/calendy"
                    class="flex border-[2px] rounded-[10px] items-center  border-primary text-white bg-primary   xl:px-5 px-4 py-[15px]  text-base  gap-2.5 hover:text-black hover:bg-gray-500  transition">
                    <span class="h-3 w-3 flex items-center">
                        <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.091 0.800049V3.85547H6.90959V0.800049H3.85417V3.85547H0.800781V23.2001H23.1987V3.85547H20.1454V0.800049H17.091ZM3.85417 8.94513H20.1443V6.90886H3.85417V8.94513ZM3.85417 20.1456H20.1443V11.9995H3.85417V20.1456Z"
                                fill="CurrentColor"></path>
                        </svg>
                    </span>


                    <span class="ml-2"> Calendly </span>
                    <span class="h-3 w-3  flex items-center"><svg class="w-full h-full" viewBox="0 0 26 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M25.5996 12L16.0645 0.800049H12.6591L20.832 10.6H0.399609V12V13.4H20.832L12.6591 23.2001H16.0645L25.5996 12Z"
                                fill="CurrentColor"></path>
                        </svg></span>
                </a>
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