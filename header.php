<!doctype html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <?php wp_head(); ?>

</head>

<body class="font-saira">
    <?php $header_content = get_field("header_group", "options"); ?>

    <nav class="w-full fixed bg-black z-[9999]">
        <div
            class="w-full flex container mx-auto items-center justify-between py-[11px] px-[23px] bg-gradient-to-r from-black to-[#000000fa] shadow-md">
             <!-- Logo and Website Name -->
             <div class="flex items-center gap-2">
                <img src="<?php echo $header_content['logo']; ?>" alt="" class="h-10 w-10">
                <span class="text-white font-bold text-[22px]">Digital <span class="text-[#fa4223]">Choice</span></span>
            </div>
            <?php if(wp_is_mobile()){ ?>
            <!-- Mobile Menu -->
            <div class="nav-container">
                <div class="nav-content">
                    <div class="flex items-center gap-3 py-2">
                        <img src="<?php echo $header_content['logo']; ?>" alt="" class="h-10 w-10">
                        <span class="text-white font-bold text-[22px]">Digital <span
                                class="text-[#fa4223]">Choice</span></span>
                    </div>
                    <div class="border border-[#e0e0e0]"></div>
                    <div class="flex flex-col gap-3">
                        <?php foreach ($header_content["main_menu"] as $one_item) { ?>
                        <a class="text-white text-[18px] hover:text-[#fa4223] transition-colors"
                            href="<?php echo $one_item['menu_item']['url']; ?>">
                            <?php echo $one_item["menu_item"]['title']; ?>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="border border-[#e0e0e0]"></div>


                    <!-- Calendly Button -->
                    <a href="/calendy"
                        class="flex items-center gap-2 bg-[#fa4223] text-white px-4 py-2 rounded-[10px] border-2 border-[#fa4223] hover:bg-[#e0e0e0] hover:text-black transition-colors">
                        <span class="flex items-center justify-center w-4 h-4">
                            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.091 0.800049V3.85547H6.90959V0.800049H3.85417V3.85547H0.800781V23.2001H23.1987V3.85547H20.1454V0.800049H17.091ZM3.85417 8.94513H20.1443V6.90886H3.85417V8.94513ZM3.85417 20.1456H20.1443V11.9995H3.85417V20.1456Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <span class="calendly-text capitalize">Schedule A meeting</span>
                        <span class="flex items-center justify-center w-4 h-4">
                            <svg class="w-full h-full" viewBox="0 0 26 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.5996 12L16.0645 0.800049H12.6591L20.832 10.6H0.399609V12V13.4H20.832L12.6591 23.2001H16.0645L25.5996 12Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- Close Button -->

                <button class="close-button" onclick="toggleNav()">X</button>

                <!-- Semi-Transparent Overlay -->
                <div class="overlay"></div>
            </div>

            <!-- Slider Toggle Button -->
            <div class="flex lg:hidden flex-col gap-1 cursor-pointer h-5 w-5" onclick="toggleNav()">
                <span class="bg-white h-0.5 w-[15px]"></span>
                <span class="bg-white h-0.5 w-[15px]"></span>
                <span class="bg-white h-0.5 w-[15px]"></span>
            </div>
            <?php }else{ ?>
           
            <div class="hidden lg:flex gap-4">
                <?php foreach ($header_content["main_menu"] as $one_item) { ?>
                <a class="text-white text-[18px] hover:text-[#fa4223] transition-colors"
                    href="<?php echo $one_item['menu_item']['url']; ?>">
                    <?php echo $one_item["menu_item"]['title']; ?>
                </a>
                <?php } ?>
            </div>
            <!-- Calendly Button -->
            <a href="<?=   $header_content['header_button']['url'] ?>"
                class="hidden lg:flex items-center gap-2 bg-[#fa4223] text-white px-4 py-2 rounded-[10px] border-2 border-[#fa4223] hover:bg-[#e0e0e0] hover:border-[#e0e0e0]  hover:text-black transition-colors">
                <span class="flex items-center justify-center w-4 h-4">
                    <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.091 0.800049V3.85547H6.90959V0.800049H3.85417V3.85547H0.800781V23.2001H23.1987V3.85547H20.1454V0.800049H17.091ZM3.85417 8.94513H20.1443V6.90886H3.85417V8.94513ZM3.85417 20.1456H20.1443V11.9995H3.85417V20.1456Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
                <span class="calendly-text"><?= $header_content['header_button']['title'] ?></span>
                <span class="flex items-center justify-center w-4 h-4">
                    <svg class="w-full h-full" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M25.5996 12L16.0645 0.800049H12.6591L20.832 10.6H0.399609V12V13.4H20.832L12.6591 23.2001H16.0645L25.5996 12Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
            </a>

            <?php } ?>
        </div>
    </nav>