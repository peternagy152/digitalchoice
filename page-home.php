<?php get_header(); ?>
<?php $home_content = get_field("home_group") ;  ?>


<!--Hero Tailwind -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extreme Hero Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    .bg-animated {
        background: linear-gradient(-45deg, #fa4223, #e0e0e0, #ffffff, #e0e0e0);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 70vh;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .glitch {
        position: relative;
    }

    .glitch::before,
    .glitch::after {
        content: attr(data-text);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 75vh;
    }

    .glitch::before {
        left: 2px;
        text-shadow: -2px 0 #ff00de;
        clip: rect(24px, 550px, 90px, 0);
        animation: glitch-anim 3s infinite linear alternate-reverse;
    }

    .glitch::after {
        left: -2px;
        text-shadow: -2px 0 #00ffff;
        clip: rect(85px, 550px, 140px, 0);
        animation: glitch-anim 2s infinite linear alternate-reverse;
    }

    @keyframes glitch-anim {
        0% {
            clip: rect(39px, 9999px, 71px, 0);
        }

        5% {
            clip: rect(76px, 9999px, 53px, 0);
        }

        10% {
            clip: rect(42px, 9999px, 16px, 0);
        }

        15% {
            clip: rect(94px, 9999px, 33px, 0);
        }

        20% {
            clip: rect(3px, 9999px, 5px, 0);
        }

        25% {
            clip: rect(21px, 9999px, 100px, 0);
        }

        30% {
            clip: rect(79px, 9999px, 82px, 0);
        }

        35% {
            clip: rect(56px, 9999px, 18px, 0);
        }

        40% {
            clip: rect(6px, 9999px, 38px, 0);
        }

        45% {
            clip: rect(65px, 9999px, 91px, 0);
        }

        50% {
            clip: rect(31px, 9999px, 56px, 0);
        }

        55% {
            clip: rect(88px, 9999px, 71px, 0);
        }

        60% {
            clip: rect(13px, 9999px, 43px, 0);
        }

        65% {
            clip: rect(50px, 9999px, 9px, 0);
        }

        70% {
            clip: rect(27px, 9999px, 68px, 0);
        }

        75% {
            clip: rect(85px, 9999px, 25px, 0);
        }

        80% {
            clip: rect(44px, 9999px, 93px, 0);
        }

        85% {
            clip: rect(19px, 9999px, 39px, 0);
        }

        90% {
            clip: rect(71px, 9999px, 86px, 0);
        }

        95% {
            clip: rect(2px, 9999px, 62px, 0);
        }

        100% {
            clip: rect(54px, 9999px, 47px, 0);
        }
    }

    .hover-3d {
        transition: transform 0.5s;
    }

    .hover-3d:hover {
        transform: perspective(1000px) rotateX(10deg) rotateY(-10deg) rotateZ(2deg);
    }

    .particle {
        position: absolute;
        border-radius: 50%;
    }

    @keyframes float-up {
        0% {
            transform: translateY(0);
            opacity: 1;
        }

        100% {
            transform: translateY(-75vh);
            opacity: 0;
        }
    }

    /* Wave Styles */
    .waves {
        position: relative;
        width: 100%;
        height: 10vh;
        margin-bottom: -7px;
        min-height: 100px;
        max-height: 150px;
    }

    .moving-waves>use {
        animation: move-waves 25s cubic-bezier(.55, .5, .45, 0) infinite;
    }

    .moving-waves>use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 11s;
    }

    .moving-waves>use:nth-child(2) {
        animation-delay: -4s;
        animation-duration: 13s;
    }

    .moving-waves>use:nth-child(3) {
        animation-delay: -3s;
        animation-duration: 15s;
    }

    .moving-waves>use:nth-child(4) {
        animation-delay: -4s;
        animation-duration: 20s;
    }

    .moving-waves>use:nth-child(5) {
        animation-delay: -4s;
        animation-duration: 25s;
    }

    .moving-waves>use:nth-child(6) {
        animation-delay: -3s;
        animation-duration: 30s;
    }

    @keyframes move-waves {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-200px);
        }
    }
    </style>
</head>

<body class="h-[90vh] flex items-center justify-center p-4 overflow-hidden">
    <div class="relative w-full h-[90vh] flex items-center justify-center bg-black bg-cover bg-center">
        <!-- Optional overlay for better text contrast -->
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
        <!-- Particles layer -->
        <div id="particles" class="absolute inset-0 z-10"></div>
        <!-- Text content layer -->
        <div
            class="mx-auto container px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center lg:pt-32 z-20 relative flex items-center justify-between">
            <!-- Text Content -->
            <div class="flex flex-col items-center lg:items-start container text-left">
                <h1 class="max-w-4xl font-display text-5xl font-medium tracking-tight text-[#fa4223] text-pretty">
                    <?php echo $home_content['hero_title']; ?>
                </h1>
                <p class="mt-6 text-lg tracking-tight text-white max-w-4xl text-pretty">
                    <?php echo $home_content['hero_desc']; ?>
                </p>
                <a href="<?php echo $home_content['hero_button']['url']; ?>"
                    class="mt-6 flex items-center gap-2 bg-[#fa4223] text-white px-4 py-2 rounded-[10px] border-2 border-[#fa4223] hover:border-[#e0e0e0] hover:bg-[#e0e0e0] hover:text-black transition-colors">
                    <span class="flex items-center justify-center w-4 h-4">
                        <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.091 0.800049V3.85547H6.90959V0.800049H3.85417V3.85547H0.800781V23.2001H23.1987V3.85547H20.1454V0.800049H17.091ZM3.85417 8.94513H20.1443V6.90886H3.85417V8.94513ZM3.85417 20.1456H20.1443V11.9995H3.85417V20.1456Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <span class="calendly-text"><?php echo $home_content['hero_button']['title']; ?></span>
                    <span class="flex items-center justify-center w-4 h-4">
                        <svg class="w-full h-full" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M25.5996 12L16.0645 0.800049H12.6591L20.832 10.6H0.399609V12V13.4H20.832L12.6591 23.2001H16.0645L25.5996 12Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                </a>
            </div>
            <!-- Image Section -->
            <div class="flex-shrink-0 mr-8 hidden lg:flex">
                <img src="<?php echo $home_content['hero_image']; ?>" alt="Hero Image"
                    class="w-full h-auto max-w-md object-cover">
            </div>
        </div>


    </div>
    <div class=" relative  top-[-66px] bottom-0 w-full">
        <div class="flex justify-center mx-auto max-w-[980px]">
            <div
                class="mt-[-2.5rem] py-3 rounded-xl bg-white shadow-xl backdrop-blur-md relative lg:absolute z-[80] w-[90%] mx-4 lg:w-[50%] hidden  lg:block">
                <div class="flex flex-wrap flex-col lg:flex-row lg:flex-nowrap">
                    <?php 
                $totalItems = count($home_content['services_repeater']);
                foreach($home_content['services_repeater'] as $index => $one_services): 
            ?>
                    <div class="flex-1 p-4 relative min-w-0">
                        <div class="p-3 text-center inset-0 inset-x-auto">
                            <!-- Display Service Icon -->
                            <img src="<?php echo $one_services['service_icon']; ?>" alt="Service Icon"
                                class="mx-auto mb-3 max-w-[39px]">
                            <!-- Display Service Title -->
                            <h1 class="text-base font-semibold text-primary mb-2 text-nowrap">
                                <?php echo $one_services['service_title']; ?>
                            </h1>
                            <!-- Display Service Description -->
                            <p class="text-sm text-gray-600"><?php echo $one_services['service_desc']; ?></p>
                        </div>
                        <!-- Add border except on the last item -->
                        <?php if ($index < $totalItems - 1): ?>
                        <hr
                            class="relative lg:absolute right-0 botton-0 lg:top-0 w-full lg:h-full lg:w-0 border-r border-gray-200 block">
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Services  -->

        <!-- Waves SVG positioned below the hero section -->
        <div class="relative w-full z-[70]">

            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="moving-waves">
                    <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40)"></use>
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                    <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                    <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                    <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95)"></use>
                </g>
            </svg>
        </div>
    </div>

    <!-- mobile services  -->

    <div
        class="mt-[-2.5rem] py-3 rounded-xl bg-white shadow-xl backdrop-blur-md relative lg:absolute z-[80] w-[90%] mx-4 lg:w-[50%] block  lg:hidden">
        <div class="flex flex-wrap flex-col lg:flex-row lg:flex-nowrap">
            <?php 
                $totalItems = count($home_content['services_repeater']);
                foreach($home_content['services_repeater'] as $index => $one_services): 
            ?>
            <div class="flex-1 p-4 relative min-w-0">
                <div class="p-3 text-center inset-0 inset-x-auto">
                    <!-- Display Service Icon -->
                    <img src="<?php echo $one_services['service_icon']; ?>" alt="Service Icon"
                        class="mx-auto mb-3 max-w-[39px]">
                    <!-- Display Service Title -->
                    <h1 class="text-base font-semibold text-primary mb-2 text-nowrap">
                        <?php echo $one_services['service_title']; ?>
                    </h1>
                    <!-- Display Service Description -->
                    <p class="text-sm text-gray-600"><?php echo $one_services['service_desc']; ?></p>
                </div>
                <!-- Add border except on the last item -->
                <?php if ($index < $totalItems - 1): ?>
                <hr class="relative  right-0 botton-0 lg:top-0 w-full lg:h-full lg:w-0 border-r border-gray-200 block">
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- about us  -->

    <section class="sm:mt-6 lg:mt-8 mt-12 container mx-auto px-4 sm:px-6 lg:px-8">

        <div
            class="my-10  px-4 sm:mt-12 sm:px-6   lg:px-4 flex gap-3 lg gap-x-[7.75rem] lg:flex-justify lg:flex flex-col-reverse lg:flex-row justify-between">
            <!-- Loop Through Dynamic Content -->
            <?php foreach($home_content['about_repeater'] as $index => $about) { ?>
            <div class="sm:text-center lg:text-left w-full lg:w-[50%] flex flex-col self-center">
                <h1 class="text-lg tracking-tight font-extrabold text-primary  md:text-5xl text-pretty">
                    <?= $about['about_title'] ?>
                </h1>
                <p
                    class="mt-3 text-base text-gray-500 sm:mt-5  sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 text-pretty">
                    <?= $about['about_content'] ?>
                </p>
                <!-- Button Section -->
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <a href="<?= $about['about_button']['url'] ?>"
                        class="mt-6 flex items-center gap-2 bg-[#fa4223] text-white px-4 py-2 rounded-[10px] border-2 border-[#fa4223] hover:border-[#e0e0e0] hover:bg-[#e0e0e0] hover:text-black transition-colors">

                        <span class="calendly-text"><?= $about['about_button']['title'] ?></span>
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
                <!-- End of Button Section -->
            </div>

            <!-- Dynamic Image and Content Section -->
            <div class="lg:inset-y-0 lg:right-0 lg:w-1/2 my-4">
                <img class="h-56 w-full object-fill sm:h-72 md:h-96 lg:w-[81%] lg:h-full"
                    src="<?= $about['about_image'] ?>" alt="<?= $about['about_title'] ?>">

            </div>
            <?php } ?>
            <!-- End of Dynamic Content Section -->
        </div>

    </section>
    <!-- Projects  -->
    <!-- ====== Products Carousel Section Start -->
    <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-[70px]">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Most Popular Products
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:leading-[1.2] md:text-[40px]">
                            Best Selling Items
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div x-data="
         {
         slides: ['1','2','3', '4', '5'],
         }
         ">
                <div class="relative flex justify-center">
                    <div class="relative w-full">
                        <div class="flex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[400px] sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px]"
                            x-ref="carousel">
                            <div
                                class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]">
                                <div>
                                    <div class="relative mb-5 overflow-hidden rounded-md">
                                        <img src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-01.jpg"
                                            alt="product" class="w-full" />
                                        <span
                                            class="absolute right-4 top-4 inline-flex items-center justify-center rounded bg-secondary pl-[10px] pr-2 py-[3px] text-sm font-medium text-white">
                                            New
                                            <span class="pl-1">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.1937 4.48125L7.79997 3.95625L6.26247 0.73125C6.14997 0.50625 5.84997 0.50625 5.73747 0.73125L4.19997 3.975L0.82497 4.48125C0.58122 4.51875 0.48747 4.8375 0.67497 5.00625L3.13122 7.5375L2.54997 11.0812C2.51247 11.325 2.75622 11.5312 2.98122 11.3813L6.03747 9.7125L9.07497 11.3813C9.28122 11.4938 9.54372 11.3062 9.48747 11.0812L8.90622 7.5375L11.3625 5.00625C11.5125 4.8375 11.4375 4.51875 11.1937 4.48125Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                        <div
                                            class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3">
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" />
                                                        <path
                                                            d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" />
                                                        <path
                                                            d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Add to Cart</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" />
                                                        <path
                                                            d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Quick View</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Favorite</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h3>
                                            <a href="javascript:void(0)"
                                                class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]">
                                                Men Winter Jacket
                                            </a>
                                        </h3>
                                        <p class="text-base font-medium text-body-color dark:text-dark-6">$35.00</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]">
                                <div>
                                    <div class="relative mb-5 overflow-hidden rounded-md">
                                        <img src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-02.jpg"
                                            alt="product" class="w-full" />
                                        <div
                                            class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3">
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" />
                                                        <path
                                                            d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" />
                                                        <path
                                                            d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Add to Cart</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" />
                                                        <path
                                                            d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Quick View</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Favorite</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h3>
                                            <a href="javascript:void(0)"
                                                class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]">
                                                Men Summer Jacket
                                            </a>
                                        </h3>
                                        <p class="text-base font-medium text-body-color dark:text-dark-6">$55.00</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]">
                                <div>
                                    <div class="relative mb-5 overflow-hidden rounded-md">
                                        <img src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-03.jpg"
                                            alt="product" class="w-full" />
                                        <span
                                            class="absolute right-4 top-4 inline-flex items-center justify-center rounded bg-red-600 pl-[10px] pr-2 py-[3px] text-sm font-medium text-white">
                                            Hot
                                            <span class="pl-1">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.2601 0.709367C5.42417 0.591971 5.641 0.578978 5.81792 0.675942C6.36504 0.975806 7.11161 1.51544 7.66876 2.39728C8.23232 3.28925 8.58064 4.49847 8.37038 6.08794C8.36791 6.10661 8.36706 6.12048 8.367 6.1305C8.39186 6.13485 8.4391 6.13725 8.51054 6.11607C8.71512 6.05543 9.01409 5.81519 8.9819 5.24938C8.96899 5.0225 9.10352 4.81308 9.31522 4.73047C9.52692 4.64787 9.76773 4.71085 9.91189 4.88651C10.6705 5.81091 11.5449 7.35598 11.6287 8.98457C11.6712 9.8111 11.5097 10.6676 11.0168 11.4622C10.5246 12.2556 9.72553 12.9491 8.55615 13.4911C8.34078 13.591 8.08522 13.5339 7.93283 13.3519C7.78043 13.1699 7.76912 12.9082 7.90524 12.7138C8.1604 12.3492 8.49801 11.3816 7.78262 10.4874C7.77356 10.4761 7.76498 10.4644 7.75689 10.4523C7.72895 10.4108 7.70497 10.3824 7.66755 10.338C7.64267 10.3084 7.61184 10.2719 7.56996 10.2197C7.4816 10.1097 7.37428 9.96212 7.29508 9.76512C7.24412 9.63837 7.20934 9.50319 7.19191 9.35681C6.91137 9.58539 6.63847 9.86768 6.42307 10.1983C5.9921 10.8598 5.78034 11.7246 6.22345 12.8176C6.30382 13.0158 6.25587 13.243 6.10224 13.3919C5.94861 13.5407 5.72003 13.5815 5.52441 13.4949C4.57229 13.0735 3.33288 12.1558 2.75581 10.7394C2.16059 9.27837 2.32039 7.41512 3.94633 5.24719L3.94633 5.24719C4.52866 4.47078 5.35445 2.9812 5.0484 1.22654C5.01373 1.02779 5.09602 0.826763 5.2601 0.709367ZM8.36938 6.15304C8.36922 6.15323 8.3686 6.15187 8.36804 6.14837C8.36927 6.15109 8.36955 6.15284 8.36938 6.15304ZM6.1605 2.21C6.09608 3.85031 5.31814 5.16813 4.78633 5.8772C3.32844 7.82105 3.30264 9.29863 3.72821 10.3432C3.99146 10.9894 4.44619 11.5172 4.93744 11.9126C4.87354 11.0261 5.13335 10.2544 5.54332 9.62511C6.126 8.73078 7.00047 8.13556 7.63632 7.85237C7.82495 7.76836 8.04531 7.80272 8.1994 7.94018C8.35349 8.07763 8.41269 8.29265 8.35069 8.4896C8.17683 9.04186 8.22822 9.27128 8.26929 9.37346C8.29316 9.43281 8.32874 9.48766 8.38866 9.56228C8.39893 9.57508 8.41339 9.59235 8.4305 9.6128C8.48172 9.67399 8.55678 9.76366 8.61494 9.84707C9.15478 10.5299 9.2986 11.2399 9.25662 11.8545C9.64189 11.553 9.92326 11.2331 10.1246 10.9086C10.4869 10.3246 10.6135 9.68774 10.5801 9.03851C10.5329 8.12063 10.1655 7.19647 9.71826 6.4404C9.48965 6.78506 9.16023 7.01865 8.80895 7.12278C8.48506 7.21879 8.09695 7.21364 7.77832 7.00856C7.42502 6.78118 7.27217 6.38328 7.32945 5.95024C7.50844 4.59714 7.20954 3.63625 6.78109 2.95812C6.5948 2.66326 6.38 2.41573 6.1605 2.21Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                        <div
                                            class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3">
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" />
                                                        <path
                                                            d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" />
                                                        <path
                                                            d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Add to Cart</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" />
                                                        <path
                                                            d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Quick View</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Favorite</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h3>
                                            <a href="javascript:void(0)"
                                                class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]">
                                                Man's Black Shirt
                                            </a>
                                        </h3>
                                        <p class="text-base font-medium text-body-color dark:text-dark-6">$18.00</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]">
                                <div>
                                    <div class="relative mb-5 overflow-hidden rounded-md">
                                        <img src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-04.jpg"
                                            alt="product" class="w-full" />
                                        <div
                                            class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3">
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" />
                                                        <path
                                                            d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" />
                                                        <path
                                                            d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Add to Cart</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" />
                                                        <path
                                                            d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Quick View</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Favorite</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h3>
                                            <a href="javascript:void(0)"
                                                class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]">
                                                Men Winter Jacket
                                            </a>
                                        </h3>
                                        <p class="text-base font-medium text-body-color dark:text-dark-6">$12.00</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]">
                                <div>
                                    <div class="relative mb-5 overflow-hidden rounded-md">
                                        <img src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-03.jpg"
                                            alt="product" class="w-full" />
                                        <span
                                            class="absolute right-4 top-4 inline-flex items-center justify-center rounded bg-red-600 pl-[10px] pr-2 py-[3px] text-sm font-medium text-white">
                                            Hot
                                            <span class="pl-1">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.2601 0.709367C5.42417 0.591971 5.641 0.578978 5.81792 0.675942C6.36504 0.975806 7.11161 1.51544 7.66876 2.39728C8.23232 3.28925 8.58064 4.49847 8.37038 6.08794C8.36791 6.10661 8.36706 6.12048 8.367 6.1305C8.39186 6.13485 8.4391 6.13725 8.51054 6.11607C8.71512 6.05543 9.01409 5.81519 8.9819 5.24938C8.96899 5.0225 9.10352 4.81308 9.31522 4.73047C9.52692 4.64787 9.76773 4.71085 9.91189 4.88651C10.6705 5.81091 11.5449 7.35598 11.6287 8.98457C11.6712 9.8111 11.5097 10.6676 11.0168 11.4622C10.5246 12.2556 9.72553 12.9491 8.55615 13.4911C8.34078 13.591 8.08522 13.5339 7.93283 13.3519C7.78043 13.1699 7.76912 12.9082 7.90524 12.7138C8.1604 12.3492 8.49801 11.3816 7.78262 10.4874C7.77356 10.4761 7.76498 10.4644 7.75689 10.4523C7.72895 10.4108 7.70497 10.3824 7.66755 10.338C7.64267 10.3084 7.61184 10.2719 7.56996 10.2197C7.4816 10.1097 7.37428 9.96212 7.29508 9.76512C7.24412 9.63837 7.20934 9.50319 7.19191 9.35681C6.91137 9.58539 6.63847 9.86768 6.42307 10.1983C5.9921 10.8598 5.78034 11.7246 6.22345 12.8176C6.30382 13.0158 6.25587 13.243 6.10224 13.3919C5.94861 13.5407 5.72003 13.5815 5.52441 13.4949C4.57229 13.0735 3.33288 12.1558 2.75581 10.7394C2.16059 9.27837 2.32039 7.41512 3.94633 5.24719L3.94633 5.24719C4.52866 4.47078 5.35445 2.9812 5.0484 1.22654C5.01373 1.02779 5.09602 0.826763 5.2601 0.709367ZM8.36938 6.15304C8.36922 6.15323 8.3686 6.15187 8.36804 6.14837C8.36927 6.15109 8.36955 6.15284 8.36938 6.15304ZM6.1605 2.21C6.09608 3.85031 5.31814 5.16813 4.78633 5.8772C3.32844 7.82105 3.30264 9.29863 3.72821 10.3432C3.99146 10.9894 4.44619 11.5172 4.93744 11.9126C4.87354 11.0261 5.13335 10.2544 5.54332 9.62511C6.126 8.73078 7.00047 8.13556 7.63632 7.85237C7.82495 7.76836 8.04531 7.80272 8.1994 7.94018C8.35349 8.07763 8.41269 8.29265 8.35069 8.4896C8.17683 9.04186 8.22822 9.27128 8.26929 9.37346C8.29316 9.43281 8.32874 9.48766 8.38866 9.56228C8.39893 9.57508 8.41339 9.59235 8.4305 9.6128C8.48172 9.67399 8.55678 9.76366 8.61494 9.84707C9.15478 10.5299 9.2986 11.2399 9.25662 11.8545C9.64189 11.553 9.92326 11.2331 10.1246 10.9086C10.4869 10.3246 10.6135 9.68774 10.5801 9.03851C10.5329 8.12063 10.1655 7.19647 9.71826 6.4404C9.48965 6.78506 9.16023 7.01865 8.80895 7.12278C8.48506 7.21879 8.09695 7.21364 7.77832 7.00856C7.42502 6.78118 7.27217 6.38328 7.32945 5.95024C7.50844 4.59714 7.20954 3.63625 6.78109 2.95812C6.5948 2.66326 6.38 2.41573 6.1605 2.21Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                        <div
                                            class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3">
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" />
                                                        <path
                                                            d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" />
                                                        <path
                                                            d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Add to Cart</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" />
                                                        <path
                                                            d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Quick View</span>
                                                </div>
                                            </div>
                                            <div class="group relative">
                                                <button
                                                    class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path
                                                            d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100">
                                                    <div
                                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2">
                                                    </div>
                                                    <span>Favorite</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h3>
                                            <a href="javascript:void(0)"
                                                class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]">
                                                Man's Black Shirt
                                            </a>
                                        </h3>
                                        <p class="text-base font-medium text-body-color dark:text-dark-6">$18.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -left-4 -right-4 top-1/2 flex -translate-y-16 items-center justify-between">
                            <button
                                class="mx-2 flex h-11 w-11 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white shadow-input transition-all hover:bg-primary hover:text-white"
                                @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                    <path
                                        d="M17.5 9.3125H4.15625L9.46875 3.90625C9.75 3.625 9.75 3.1875 9.46875 2.90625C9.1875 2.625 8.75 2.625 8.46875 2.90625L2 9.46875C1.71875 9.75 1.71875 10.1875 2 10.4688L8.46875 17.0312C8.59375 17.1563 8.78125 17.25 8.96875 17.25C9.15625 17.25 9.3125 17.1875 9.46875 17.0625C9.75 16.7812 9.75 16.3438 9.46875 16.0625L4.1875 10.7187H17.5C17.875 10.7187 18.1875 10.4062 18.1875 10.0312C18.1875 9.625 17.875 9.3125 17.5 9.3125Z" />
                                </svg>
                            </button>
                            <button
                                class="mx-2 flex h-11 w-11 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white shadow-input transition-all hover:bg-primary hover:text-white"
                                @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                    <path
                                        d="M18 9.5L11.5312 2.9375C11.25 2.65625 10.8125 2.65625 10.5312 2.9375C10.25 3.21875 10.25 3.65625 10.5312 3.9375L15.7812 9.28125H2.5C2.125 9.28125 1.8125 9.59375 1.8125 9.96875C1.8125 10.3437 2.125 10.6875 2.5 10.6875H15.8437L10.5312 16.0938C10.25 16.375 10.25 16.8125 10.5312 17.0938C10.6562 17.2188 10.8437 17.2813 11.0312 17.2813C11.2187 17.2813 11.4062 17.2188 11.5312 17.0625L18 10.5C18.2812 10.2187 18.2812 9.78125 18 9.5Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Products Carousel Section End -->


    <script>
    function createParticle() {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        const size = Math.random() * 5 + 2;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;

        const x = Math.random() * window.innerWidth;
        // Set the particle to start 75vh from the bottom
        const y = window.innerHeight * 0.75;
        particle.style.left = `${x}px`;
        particle.style.top = `${y}px`;

        // Array of the specified colors
        const colors = ['#e0e0e0', '#fa4223', '#ffffff'];
        // Randomly select one of the colors
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        particle.style.backgroundColor = randomColor;

        const duration = Math.random() * 3 + 2;
        particle.style.animation = `float-up ${duration}s linear`;

        document.getElementById('particles').appendChild(particle);

        setTimeout(() => {
            particle.remove();
        }, duration * 1000);
    }

    setInterval(createParticle, 50);
    </script>
</body>

</html>





<!-- Services  -->
<h2> <?php echo $home_content['service_title'] ;  ?></h2>
<!-- Services Array  -->




<!-- Projects  -->
<h2><?php echo $home_content['projects_section_title'] ?></h2>


<!-- Projects Array -->
<?php foreach($home_content['project_repeater'] as $one_project){ ?>
<img src="<?php echo $one_project['project_image'] ?>" alt="">
<h3><?= $one_project['project_title']?></h3>
<h3><?= $one_project['project_subtitle']?></h3>
<?php } ?>


<!-- Last Section  -->
<h3><?= $home_content['last_title'] ?></h3>
<h3><?= $home_content['last_subtitle'] ?></h3>
<a href="<?php echo $home_content['last_button']['url'] ?>"> <?php echo $home_content['last_button']['title'] ;  ?></a>

<?php get_footer(); ?>