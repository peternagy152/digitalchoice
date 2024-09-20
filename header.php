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

<nav class="relative bg-transparent  shadow container mx-auto ">
<div class = " my-3 px-4 flex items-center rounded-[40px] justify-between py-2 start-0 end-0 mx-4">

    <a class="text-2xl font-bold text-violet-600  w-[90px] h-[90px] block" href="/">        
		
	<img src="<?php echo $header_content['logo']; ?>" alt="" class="w-[90px] h-[90px]">
	</a>

    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-violet-600  p-1" id="navbar_burger">
            <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Hamberger menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>

    <!-- <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li>
            <div class="relative mx-auto text-gray-600">
                
            </div>
        </li>
    </ul> -->

    <div class="hidden lg:flex">
			<div class=" mx-4 flex justify-center text-center items-center font-normal text-[14px] text-[#344767]">		<?php foreach ($header_content["main_menu"] as $one_item) { ?>
            <a href="<?php echo $one_item['menu_item']['url']; ?>"><?php echo $one_item["menu_item"]['title']; ?></a>
        		<?php } ?></div>

        <a href="https://tailwindflex.com/playground">
            <button class="py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white hover:bg-violet-500 hover:text-gray-100  hidden lg:block">
                Tailwind Playground
            </button>
        </a>

        <div>
            <a class="py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black hover:bg-gray-100  hidden lg:inline-block" href="https://tailwindflex.com/login">
                Sign In
            </a>
        </div>
    </div>    </div>

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
        <a href="<?php echo $header_content['header_button']['url']; ?>"><?php echo $header_content['header_button']['title']; ?></a>
    </header>
</div>

<?php wp_footer(); ?>
</body>
</html>
