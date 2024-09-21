<!doctype html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body>
    <?php $header_content = get_field("header_group", "options"); ?>

    <nav class="container navbar_center">
        <div class="navbar container">
            <!-- Logo and Website Name -->
            <div class="logo-container">
                <img src="<?php echo $header_content['logo']; ?>" alt="" class="logo">
                <span class="website-name">Digital <span class="highlight">Choice</span></span>
            </div>
            <div class="menu_nav">
                <?php foreach ($header_content["main_menu"] as $one_item) { ?>
                <a class="menu-item" href="<?php echo $one_item['menu_item']['url']; ?>">
                    <?php echo $one_item["menu_item"]['title']; ?>
                </a>
                <?php } ?>
            </div>
            <!-- Calendly Button -->
            <a href="/calendy" class="calendly_button_nav">
                <span class="icon">
                    <svg class="icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.091 0.800049V3.85547H6.90959V0.800049H3.85417V3.85547H0.800781V23.2001H23.1987V3.85547H20.1454V0.800049H17.091ZM3.85417 8.94513H20.1443V6.90886H3.85417V8.94513ZM3.85417 20.1456H20.1443V11.9995H3.85417V20.1456Z"
                            fill="CurrentColor"></path>
                    </svg>
                </span>
                <span class="calendly-text">Calendly</span>
            </a>
            <!-- Navigation Links -->
            <div class="nav-content">
                <div class="logo_nav">
                    <img src="<?php echo $header_content['logo']; ?>" alt="" class="logo">
                    <span class="website-name">Digital <span class="highlight">Choice</span></span>
                </div>
                <div class="borderline"></div>
                <div class="menu">
                    <?php foreach ($header_content["main_menu"] as $one_item) { ?>
                    <a class="menu-item" href="<?php echo $one_item['menu_item']['url']; ?>">
                        <?php echo $one_item["menu_item"]['title']; ?>
                    </a>
                    <?php } ?>
                </div>
                <div class="borderline"></div>

                <!-- Close Button -->
                <button class="close-button" onclick="toggleNav()">X</button>

                <!-- Calendly Button -->
                <a href="/calendy" class="calendly-button">
                    <span class="icon">
                        <svg class="icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.091 0.800049V3.85547H6.90959V0.800049H3.85417V3.85547H0.800781V23.2001H23.1987V3.85547H20.1454V0.800049H17.091ZM3.85417 8.94513H20.1443V6.90886H3.85417V8.94513ZM3.85417 20.1456H20.1443V11.9995H3.85417V20.1456Z"
                                fill="CurrentColor"></path>
                        </svg>
                    </span>
                    <span class="calendly-text">Calendly</span>
                </a>
            </div>

            <!-- Slider Toggle Button -->
            <div class="nav-toggle" onclick="toggleNav()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
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