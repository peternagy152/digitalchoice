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
    <link href="<?php echo get_template_directory_uri() . '/assets/css/output.css'; ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body >
<?php $header_content = get_field("header_group", "options"); ?>
<div class="sticky top-0 z-50 bg-white shadow-md backdrop-blur-sm">
    <div class="flex items-center justify-between px-4 py-2 mx-4 my-3 rounded-lg">
        <nav class="flex items-center w-full">
            <!-- Logo Section -->
            <a href="https://demos.creative-tim.com/soft-ui-design-system/presentation.html" class="text-lg font-bold text-violet-600 flex items-center">
                <img src="<?php echo $header_content['logo']; ?>" alt="Logo" class="w-12 h-12 mr-2" />
                Soft UI Design System
            </a>

            <!-- Burger Button for Mobile -->
            <button class="lg:hidden ml-auto p-2 text-violet-600" id="navbar_burger">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>

            <!-- Main Menu and Additional Links -->
            <div class="hidden lg:flex flex-1 justify-between items-center">
                <div class="mx-4 flex justify-center text-center items-center font-normal text-[14px] text-[#344767]">
                    <?php foreach ($header_content["main_menu"] as $one_item) { ?>
                        <a href="<?php echo $one_item['menu_item']['url']; ?>" class="mx-2 text-gray-800 hover:text-violet-600">
                            <?php echo $one_item["menu_item"]['title']; ?>
                        </a>
                    <?php } ?>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="https://tailwindflex.com/playground">
                        <button class="py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white hover:bg-violet-500 hover:text-gray-100">
                            Tailwind Playground
                        </button>
                    </a>

                    <a href="https://tailwindflex.com/login" class="py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black hover:bg-gray-200">
                        Sign In
                    </a>
                </div>
            </div>
        </nav>
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

<?php wp_footer(); ?>
</body>
</html>
