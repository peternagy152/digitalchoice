<!doctype html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <style>
    /* Default styles for larger screens */
    .nav-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .nav-toggle {
        display: none;
        /* Hide the toggle button by default */
    }

    /* Responsive styles for mobile devices */
    @media (max-width: 768px) {
        .nav-toggle {
            display: block;
            /* Show toggle button on mobile */
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 60;
            cursor: pointer;
        }

        .hidden {
            display: none;
        }

        .nav-open .nav-content {
            transform: translateX(0);
        }

        .nav-content {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            position: fixed;
            top: 0;
            left: 0;
            width: 80%;
            max-width: 300px;
            height: 100vh;
            background: #3162C5;
            /* Adjust the color as needed */
            z-index: 50;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            /* Ensures the inner content isn't stretched */
        }

        .nav-content>div {
            flex-grow: 0;
            margin-top: 20px;
            /* Add spacing if needed */
        }
    }
    </style>
    <?php wp_head(); ?>
</head>

<body>
    <?php $header_content = get_field("header_group", "options"); ?>

    <!-- Toggle Button for Mobile -->
    <div class="nav-toggle" onclick="toggleNav()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <nav class="container mx-auto">
        <div
            class="flex items-center justify-between my-3 px-2 lg:px-4 py-1 lg:py-2 border border-transparent rounded-[40px] bg-custom-gradient shadow-lg">
            <!-- Logo and Website Name -->
            <div class="flex items-center space-x-1">
                <img src="<?php echo $header_content['logo']; ?>" alt="" class="h-12 w-12">
                <span class="text-white text-2xl font-bold">Digital</span>
                <span class="text-primary text-2xl font-bold">Choice</span>
            </div>

            <!-- Navigation Links -->
            <div class="nav-content">
                <!-- Use another div inside to separate styling -->
                <div class="flex flex-col space-y-6">
                    <?php foreach ($header_content["main_menu"] as $one_item) { ?>
                    <a class="text-white hover:text-primary" href="<?php echo $one_item['menu_item']['url']; ?>">
                        <?php echo $one_item["menu_item"]['title']; ?>
                    </a>
                    <?php } ?>
                </div>
            </div>

            <!-- Calendly Button -->
            <div class="flex space-x-2">
                <a href="/calendy"
                    class="flex border rounded-[40px] items-center border-primary text-white bg-primary xl:px-5 px-4 py-2 text-base gap-2.5 hover:text-black hover:bg-gray-500 transition">
                    <span class="icon flex items-center" style="width: 12px; height: 12px;">
                        <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.091 0.800049V3.85547H6.90959V0.800049H3.85417V3.85547H0.800781V23.2001H23.1987V3.85547H20.1454V0.800049H17.091ZM3.85417 8.94513H20.1443V6.90886H3.85417V8.94513ZM3.85417 20.1456H20.1443V11.9995H3.85417V20.1456Z"
                                fill="CurrentColor"></path>
                        </svg>
                    </span>
                    <span class="ml-2 text-white" style="font-weight: bold; font-size: 14px;">Calendly</span>
                </a>
            </div>
        </div>
    </nav>

    <script>
    function toggleNav() {
        document.body.classList.toggle('nav-open');
    }
    </script>

    <?php wp_footer(); ?>
</body>

</html>