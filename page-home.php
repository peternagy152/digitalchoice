<?php get_header(); ?>
<?php $home_content = get_field("home_group") ;  ?>


<!--Hero Tailwind -->
<!DOCTYPE html>
<!DOCTYPE html>
<!DOCTYPE html>
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
            <div class="mt-[-2.5rem] py-3 rounded-xl bg-white shadow-xl backdrop-blur-md absolute z-[80] w-[50%]">
                <div class="flex flex-wrap lg:flex-nowrap">
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
                        <hr class="absolute right-0 top-0 h-full border-r border-gray-200 hidden md:block">
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

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Building digital <br>products &amp; brands.
                </h1>

                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">This
                    free and open-source landing page template was built using the utility classes from
                    <a target="_blank" class="hover:underline">Tailwind CSS</a> and based on the
                    components from the <a href="#/" class="hover:underline" target="_blank">Flowbite Library</a> and
                    the
                    <a href="https://flowbite.com/blocks/" target="_blank" class="hover:underline">Blocks System</a>.
                </p>

                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">

                    <a href="" target="_blank"
                        class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-200" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path
                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                            </path>
                        </svg> View on GitHub
                    </a>

                    <a href="" target="_blank"
                        class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">

                        <svg class="w-4 h-4 mr-2" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 300"
                            width="1667" height="2500">
                            <style type="text/css">
                            .st0 {
                                fill: #0acf83
                            }

                            .st1 {
                                fill: #a259ff
                            }

                            .st2 {
                                fill: #f24e1e
                            }

                            .st3 {
                                fill: #ff7262
                            }

                            .st4 {
                                fill: #1abcfe
                            }
                            </style>
                            <title>Figma.logo</title>
                            <desc>Created using Figma</desc>
                            <path id="path0_fill" class="st0"
                                d="M50 300c27.6 0 50-22.4 50-50v-50H50c-27.6 0-50 22.4-50 50s22.4 50 50 50z"></path>
                            <path id="path1_fill" class="st1"
                                d="M0 150c0-27.6 22.4-50 50-50h50v100H50c-27.6 0-50-22.4-50-50z"></path>
                            <path id="path1_fill_1_" class="st2"
                                d="M0 50C0 22.4 22.4 0 50 0h50v100H50C22.4 100 0 77.6 0 50z"></path>
                            <path id="path2_fill" class="st3" d="M100 0h50c27.6 0 50 22.4 50 50s-22.4 50-50 50h-50V0z">
                            </path>
                            <path id="path3_fill" class="st4"
                                d="M200 150c0 27.6-22.4 50-50 50s-50-22.4-50-50 22.4-50 50-50 50 22.4 50 50z"></path>
                        </svg>
                        Get Figma file
                    </a>

                </div>
            </div>

            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://demo.themesberg.com/landwind/images/hero.png" alt="hero image">
            </div>

        </div>
    </section>
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


<!--  About Section  -->
<?php foreach($home_content['about_repeater'] as $about){ ?>
<img src="<?= $about['about_image'] ?>" alt="">
<h3><?= $about['about_title'] ?></h3>
<p> <?= $about['about_content'] ?> </p>
<a href="<?= $about['about_button']['url'] ?>"> <?= $about['about_button']['title'] ?></a>


<?php  } ?>

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