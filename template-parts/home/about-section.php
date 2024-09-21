<section class="sm:mt-6 lg:mt-8 mt-12 container mx-auto px-4 sm:px-6 lg:px-8">

<div
    class="my-10  px-4 sm:mt-12 sm:px-6   lg:px-4 flex gap-3 lg gap-x-[7.75rem] lg:flex-justify lg:flex flex-col-reverse lg:flex-row justify-between">
    <!-- Loop Through Dynamic Content -->

    <?php foreach($home_content['about_repeater'] as $index => $about) { ?>
    <div class="sm:text-center lg:text-left w-full lg:w-[50%] flex flex-col self-center items-start">
        <h2 class=" text-secondary text-sm mb-[20px]">About Us</h2>
        <h1 class="text-xl tracking-tight font-extrabold text-primary  md:text-5xl text-pretty capitalize">
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

                <span class="calendly-text capitalize"><?= $about['about_button']['title'] ?></span>
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