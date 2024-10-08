<?php get_header(); ?>
<?php $home_content = get_field("home_group") ;  ?>

<body class="h-[90vh] flex items-center justify-center p-4 overflow-hidden">
    <div class="relative w-full h-[90vh] flex items-center justify-center bg-black bg-cover bg-center">
        <!-- Optional overlay for better text contrast -->
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
        <!-- Particles layer -->
        <div id="particles" class="absolute inset-0 z-10"></div>
        <!-- Text content layer -->
        <div
            class="mx-auto container px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center lg:pt-32 z-20 relative flex items-center justify-between lg:gap-x-[155px]">
            <!-- Text Content -->
            <div class="flex flex-col items-center lg:items-start container text-center lg:text-left">
                <h1
                    class="max-w-4xl font-display text-4xl lg:text-5xl font-medium tracking-tight text-[#fa4223] text-pretty capitalize">
                    <?php echo $home_content['hero_title']; ?>
                </h1>
                <p class="mt-6 text-base lg:text-lg tracking-tight text-white max-w-4xl text-pretty ">
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
                    <span class="calendly-text capitalize"><?php echo $home_content['hero_button']['title']; ?></span>
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
                    class="w-full h-auto max-w-[30rem] object-cover">
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

    <?php require_once "template-parts/home/about-section.php" ;  ?>

   
    <!-- Projects  -->
    <!-- ====== Products Carousel Section Start -->
    <div class="glide">
        <h2
            class="my-4 text-pretty font-extrabold text-2xl  lg:text-4xl text-primary container mx-auto flex text-center items-center justify-center capitalize">
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

    <!-- ====== FAQS Section End -->
    <div class="bg-black ">
        <div class="max-w-screen-xl mx-auto px-5  min-h-sceen mt-[5rem] py-6">
            <div class="flex flex-col items-center">
                <h2 class="font-bold text-5xl  text-white tracking-tight">
                    FAQ
                </h2>
                <p class="text-primary text-xl mt-3">
                    Frequenty asked questions
                </p>
            </div>
            <div class="grid divide-y divide-neutral-200 max-w-xl mx-auto mt-8">
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-white"> What is a SAAS platform?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="white" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-white  mt-3 group-open:animate-fadeIn">
                            SAAS platform is a cloud-based software service that allows users to access
                            and use a variety of tools and functionality.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-white"> How does billing work?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="white" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-white  mt-3 group-open:animate-fadeIn">
                            We offers a variety of billing options, including monthly and annual subscription plans,
                            as well as pay-as-you-go pricing for certain services. Payment is typically made through a
                            credit
                            card or other secure online payment method.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-white"> Can I get a refund for my subscription?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="white" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-white  mt-3 group-open:animate-fadeIn">
                            We offers a 30-day money-back guarantee for most of its subscription plans. If you are not
                            satisfied with your subscription within the first 30 days, you can request a full refund.
                            Refunds
                            for subscriptions that have been active for longer than 30 days may be considered on a
                            case-by-case
                            basis.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-white"> How do I cancel my subscription?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="white" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-white  mt-3 group-open:animate-fadeIn">
                            To cancel your We subscription, you can log in to your account and navigate to the
                            subscription management page. From there, you should be able to cancel your subscription and
                            stop
                            future billing.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-white"> Can I try this platform for free?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="white" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-white  mt-3 group-open:animate-fadeIn">
                            We offers a free trial of its platform for a limited time. During the trial period,
                            you will have access to a limited set of features and functionality, but you will not be
                            charged.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-white"> How do I access documentation?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="white" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-white  mt-3 group-open:animate-fadeIn">
                            Documentation is available on the company's website and can be accessed by
                            logging in to your account. The documentation provides detailed information on how to use
                            the ,
                            as well as code examples and other resources.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-white"> How do I contact support?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="white" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-white  mt-3 group-open:animate-fadeIn">
                            If you need help with the platform or have any other questions, you can contact the
                            company's support team by submitting a support request through the website or by emailing
                            support@We.com.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-white"> Do you offer any discounts or promotions?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="white" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-white  mt-3 group-open:animate-fadeIn">
                            We may offer discounts or promotions from time to time. To stay up-to-date on the latest
                            deals and special offers, you can sign up for the company's newsletter or follow it on
                            social
                            media.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-white"> How do we compare to other similar services?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="white" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-white  mt-3 group-open:animate-fadeIn">
                            This platform is a highly reliable and feature-rich service that offers a wide range
                            of tools and functionality. It is competitively priced and offers a variety of billing
                            options
                            to
                            suit different needs and budgets.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </div>




    <!-- ====== Last Section -->

    <div class=" w-full  bg-secondary ">

        <div
            class="container mx-auto py-[6rem]  flex flex-col gap-y-3 gap-x-3 px-4 w-full justify-center items-center text-center ">
            <h3 class="text-primary md:text-[40px] text-xl  font-normal text-pretty ">
                <?= $home_content['last_subtitle'] ?></h3>

            <h3 class="text-black md:text-[96px] text-[36px] text-pretty font-bold  capitalize">
                <?= $home_content['last_title'] ?>
            </h3>

            <a href="<?php echo $home_content['last_button']['url'] ?>"
                class="mt-6 flex text lg:items-center gap-2 items-center bg-primary text-white px-4 py-2 rounded-[10px] border-2 border-primary hover:border-white hover:bg-white  hover:text-black transition-colors">
                <span class="flex items-center justify-center w-4 h-4">
                    <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.091 0.800049V3.85547H6.90959V0.800049H3.85417V3.85547H0.800781V23.2001H23.1987V3.85547H20.1454V0.800049H17.091ZM3.85417 8.94513H20.1443V6.90886H3.85417V8.94513ZM3.85417 20.1456H20.1443V11.9995H3.85417V20.1456Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
                <span
                    class="md:text-xl text-base font-medium capitalize"><?php echo $home_content['last_button']['title'] ;  ?></span>
                <span class="flex items-center justify-center w-4 h-4">
                    <svg class="w-full h-full" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M25.5996 12L16.0645 0.800049H12.6591L20.832 10.6H0.399609V12V13.4H20.832L12.6591 23.2001H16.0645L25.5996 12Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
            </a>
        </div>
    </div>
                </div>


<?php get_footer() ;  ?>