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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">

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
            <div class="flex flex-col items-center lg:items-start container text-center lg:text-left">
                <h1
                    class="max-w-4xl font-display text-4xl lg:text-5xl font-medium tracking-tight text-[#fa4223] text-pretty">
                    <?php echo $home_content['hero_title']; ?>
                </h1>
                <p class="mt-6 text-base lg:text-lg tracking-tight text-white max-w-4xl text-pretty">
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
        <h2 class="flex justify-center text-center text-xl font-semibold text-primary text-pretty">
            <?php echo $home_content['service_title'] ;  ?></h2>

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
            <div class="sm:text-center lg:text-left w-full lg:w-[50%] flex flex-col self-center items-start">
                <h1 class="text-xl tracking-tight font-extrabold text-primary  md:text-5xl text-pretty">
                    <?= $about['about_title'] ?>
                </h1>
                <p
                    class="mt-3 text-base text-gray-500 sm:mt-5  sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 text-pretty">
                    <?= $about['about_content'] ?>
                </p>
                <!-- Button Section -->
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <a href="<?= $about['about_button']['url'] ?>"
                        class="mt-6 flex text lg:items-center gap-2 bg-[#fa4223] text-white px-4 py-2 rounded-[10px] border-2 border-[#fa4223] hover:border-[#e0e0e0] hover:bg-[#e0e0e0] hover:text-black transition-colors">

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
                <img class="h-56 w-[90%] object-fill sm:h-72 md:h-96 lg:w-[81%] lg:h-full"
                    src="<?= $about['about_image'] ?>" alt="<?= $about['about_title'] ?>">

            </div>
            <?php } ?>
            <!-- End of Dynamic Content Section -->
        </div>

    </section>
    <!-- Projects  -->
    <!-- ====== Products Carousel Section Start -->
    <div class="glide">
        <h2
            class="my-4 text-pretty font-extrabold text-2xl  lg:text-4xl text-primary container mx-auto flex text-center items-center justify-center">
            <?php echo $home_content['projects_section_title'] ?></h2>
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php foreach($home_content['project_repeater'] as $one_project) { ?>
                <li class="glide__slide">
                    <div class="relative  rounded-lg shadow  overflow-hidden px-3 lg:px-0">
                        <!-- Image Container with Text Overlay -->
                        <div class="relative">
                            <img src="<?php echo $one_project['project_image']; ?>" alt="Item Image"
                                class="w-full rounded">
                            <!-- Text Overlay Positioned at the Bottom -->
                            <div
                                class="absolute bottom-0 text-center flex flex-col items-center w-full bg-black bg-opacity-20 p-4 text-white">
                                <h2 class="text-xl font-bold">
                                    <?= $one_project['project_title']; ?>
                                </h2>
                                <p class="text-md font-medium text-primary">
                                    <?= $one_project['project_subtitle']; ?>
                                </p>
                            </div>
                        </div>

                    </div>

                </li>
                <?php } ?>
            </ul>
        </div>

        <!-- Navigation Buttons -->
        <div class="glide__arrows" data-glide-el="controls">
            <button
                class="glide__arrow glide__arrow--left !left-[1rem] lg:!left-[2rem] !top-[63%] lg:!top-[50%]  flex items-center gap-2 !bg-[#fa4223] text-white px-4 py-2 !rounded-[40px] !border-2 !border-[#fa4223] hover:!border-[#e0e0e0] hover:!bg-[#e0e0e0] hover:text-black transition-colors"
                data-glide-dir="<">
                <svg class="w-4 h-4 rotate-180" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.5996 12L16.0645 0.800049H12.6591L20.832 10.6H0.399609V12V13.4H20.832L12.6591 23.2001H16.0645L25.5996 12Z"
                        fill="currentColor"></path>
                </svg> </button>
            <button
                class="glide__arrow glide__arrow--right !right-[1rem] !top-[63%] lg:!top-[50%] lg:!right-[2rem]  flex items-center !bg-[#fa4223] gap-2 !visiblebg-[#fa4223] text-white px-4 py-2 !rounded-[40px] !border-2 !border-[#fa4223] hover:!border-[#e0e0e0] hover:!bg-[#e0e0e0] hover:text-black transition-colors"
                data-glide-dir=">">
                <svg class="w-4 h-4" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.5996 12L16.0645 0.800049H12.6591L20.832 10.6H0.399609V12V13.4H20.832L12.6591 23.2001H16.0645L25.5996 12Z"
                        fill="currentColor"></path>
                </svg> </button>
        </div>
    </div>
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


    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>

    <script>
    // Initialize Glide.js
    new Glide('.glide', {
        type: 'carousel',
        perView: 4, // Number of slides to show at once
        focusAt: 'center', // Focus the current slide
        gap: 20, // Space between slides
        breakpoints: {
            1024: {
                perView: 3
            },
            768: {
                perView: 2
            },
            480: {
                perView: 1
            }
        }
    }).mount();
    </script>

</body>

</html>





<!-- Services  -->
<h2> <?php echo $home_content['service_title'] ;  ?></h2>
<!-- Services Array  -->



<!-- Last Section  -->
<h3><?= $home_content['last_title'] ?></h3>
<h3><?= $home_content['last_subtitle'] ?></h3>
<a href="<?php echo $home_content['last_button']['url'] ?>"> <?php echo $home_content['last_button']['title'] ;  ?></a>

<?php get_footer(); ?>