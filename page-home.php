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
        height: 100%;
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
        transition: transform 0.3s;
    }

    .hover-3d:hover {
        transform: perspective(1000px) rotateX(10deg) rotateY(-10deg) rotateZ(2deg);
    }

    .particle {
        position: absolute;
        border-radius: 50%;
    }

    @keyframes float-up {
        to {
            transform: translateY(-100vh) rotate(360deg);
            opacity: 0;
        }
    }
    </style>
</head>

<body class="h-[75vh] flex items-center justify-center p-4 overflow-hidden">
    <div class="relative w-full h-[75vh] flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://demos.creative-tim.com/soft-ui-design-system/assets/img/curved-images/curved.jpg');">
        <!-- Optional overlay for better text contrast -->
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
        <!-- Particles layer -->
        <div id="particles" class="absolute inset-0 z-10"></div>
        <!-- Text content layer -->
        <div class="text-center z-20 relative">
            <h1 class="text-6xl font-bold mb-4 text-white neon-text glitch hover-3d" data-text="CYBERSPACE">CYBERSPACE
            </h1>
            <p class="text-xl text-[#fa4223] mb-8">Enter the digital realm of infinite possibilities</p>
            <button
                class="bg-gradient-to-r from-[#fa4223] to-[#e0e0e0] text-white font-bold py-3 px-8 rounded-full transition-all duration-300 hover:scale-110 inline-block">
                <i class="fas fa-rocket mr-2"></i>Launch Now
            </button>
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
        const y = window.innerHeight;
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