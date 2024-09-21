<?php get_header(); ?>
<?php $home_content = get_field("home_group") ;  ?>


<!--Hero Tailwind -->
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
    </style>
</head>

<body class="h-[75vh] flex items-center justify-center p-4 overflow-hidden">
    <div class="relative w-full h-[75vh] flex items-center justify-center bg-[#797878] bg-cover bg-center">
        <!-- Optional overlay for better text contrast -->
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
        <!-- Particles layer -->
        <div id="particles" class="absolute inset-0 z-10"></div>
        <!-- Text content layer -->
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center lg:pt-32 z-20 relative">


            <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-[#fa4223]  sm:text-7xl">
                <?php echo $home_content['hero_title'] ;  ?>

            </h1>

            <p class="mx-auto mt-9 max-w-2xl text-lg tracking-tight text-slate-700 sm:mt-6">
            <h2> <?php echo $home_content['hero_desc'] ;  ?></h2>

            </p>

            <div class="mt-12 flex flex-col justify-center gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
                <a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-slate-900 text-white hover:bg-slate-700 hover:text-slate-100 active:bg-slate-800 active:text-slate-300 focus-visible:outline-slate-900 animate-fade-in-left"
                    href="#">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24"
                        aria-hidden="true" class="h-3 w-3 flex-none" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.824 7.287c.008 0 .004 0 0 0zm-2.8-1.4c.006 0 .003 0 0 0zm16.754 2.161c-.505-1.215-1.53-2.528-2.333-2.943.654 1.283 1.033 2.57 1.177 3.53l.002.02c-1.314-3.278-3.544-4.6-5.366-7.477-.091-.147-.184-.292-.273-.446a3.545 3.545 0 01-.13-.24 2.118 2.118 0 01-.172-.46.03.03 0 00-.027-.03.038.038 0 00-.021 0l-.006.001a.037.037 0 00-.01.005L15.624 0c-2.585 1.515-3.657 4.168-3.932 5.856a6.197 6.197 0 00-2.305.587.297.297 0 00-.147.37c.057.162.24.24.396.17a5.622 5.622 0 012.008-.523l.067-.005a5.847 5.847 0 011.957.222l.095.03a5.816 5.816 0 01.616.228c.08.036.16.073.238.112l.107.055a5.835 5.835 0 01.368.211 5.953 5.953 0 012.034 2.104c-.62-.437-1.733-.868-2.803-.681 4.183 2.09 3.06 9.292-2.737 9.02a5.164 5.164 0 01-1.513-.292 4.42 4.42 0 01-.538-.232c-1.42-.735-2.593-2.121-2.74-3.806 0 0 .537-2 3.845-2 .357 0 1.38-.998 1.398-1.287-.005-.095-2.029-.9-2.817-1.677-.422-.416-.622-.616-.8-.767a3.47 3.47 0 00-.301-.227 5.388 5.388 0 01-.032-2.842c-1.195.544-2.124 1.403-2.8 2.163h-.006c-.46-.584-.428-2.51-.402-2.913-.006-.025-.343.176-.389.206-.406.29-.787.616-1.136.974-.397.403-.76.839-1.085 1.303a9.816 9.816 0 00-1.562 3.52c-.003.013-.11.487-.19 1.073-.013.09-.026.181-.037.272a7.8 7.8 0 00-.069.667l-.002.034-.023.387-.001.06C.386 18.795 5.593 24 12.016 24c5.752 0 10.527-4.176 11.463-9.661.02-.149.035-.298.052-.448.232-1.994-.025-4.09-.753-5.844z">
                        </path>
                    </svg>
                    <span class="ml-3">Add to Firefox</span>
                </a>
                <div class="relative flex flex-1 flex-col items-stretch sm:flex-none" data-headlessui-state="">
                    <button
                        class="group inline-flex ring-1 items-center justify-center rounded-full py-2 px-4 text-sm focus:outline-none ring-slate-200 text-slate-700 hover:text-slate-900 hover:ring-slate-300 active:bg-slate-100 active:text-slate-600 focus-visible:outline-blue-600 focus-visible:ring-slate-300 animate-fade-in-right"
                        type="button">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24"
                            aria-hidden="true" class="h-3 w-3 flex-none fill-current text-blue-600" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701">
                            </path>
                        </svg>
                        <span class="ml-3">Download for Mac</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

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

    <style>
    /* Particle styles */
    .particle {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    /* Particle animation */
    @keyframes float-up {
        0% {
            transform: translateY(0);
            opacity: 1;
        }

        100% {
            transform: translateY(-100vh);
            opacity: 0;
        }
    }
    </style>
</body>

</html>


<!-- Hero Banner  -->
<h2> <?php echo $home_content['hero_title'] ;  ?></h2>
<h2> <?php echo $home_content['hero_desc'] ;  ?></h2>
<img src="<?php echo $home_content['hero_image'] ?>" alt="">
<a href="<?php echo $home_content['hero_button']['url'] ?>"> <?php echo $home_content['hero_button']['title'] ; ?></a>


<!-- Services  -->
<h2> <?php echo $home_content['service_title'] ;  ?></h2>
<!-- Services Array  -->
<?php foreach($home_content['services_repeater'] as $one_services){ ?>
<img src="<?php echo $one_services['service_icon'] ?>" alt="">
<h2><?php $one_services['service_title'] ?></h2>
<h2><?php $one_services['service_desc'] ?></h2>
<?php } ?>


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