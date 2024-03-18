<section class="bg-white mt-1 dark:bg-[#272727] font-app border-t-2">
    <footer
        class="container-lg max-w-screen-xl mx-auto text-black dark:text-white px-5 py-10 flex justify-center flex-col items-center">

        <div class="flex flex-col justify-center items-center">
            <a href="#">
                <img src="{{ asset('assets/images/logo/Untitled_design__2_-removebg-preview.png') }}"
                    class="w-[80px]  filter invert-0 dark:invert" alt="">
            </a>
            <h1 class="text-[33px] font-highlight">Rean ALL</h1>
        </div>

        <div class="pt-8 pb-2">
            <a href="">
                <button type="button"
                    class="gap-1 text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                    <i class="fa-brands fa-facebook"></i>
                    Facebook
                </button>
            </a>

            <a href="">
                <button type="button"
                    class="gap-1 text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 me-2 mb-2">
                    <i class="fa-brands fa-tiktok"></i>
                    Tik Tok
                </button>
            </a>

            <a href="">
                <button type="button"
                    class="gap-1 text-gray-200 bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 me-2 mb-2">
                    <i class="fa-brands fa-youtube"></i>
                    Youtube
                </button>
            </a>

        </div>

        <h2 class="text-[15px] font-thin">
            @lang('website.copyright.copyright-text') <span @class(['text-[21px]'=> !!$isLocaleKm,
                'text-pink-700'])>@lang('website.copyright.rean-all')</span>
            @lang('website.copyright.year')
        </h2>
        <p class="mt-1 text-[12px]">@lang('website.copyright.description')</p>
    </footer>
</section>
