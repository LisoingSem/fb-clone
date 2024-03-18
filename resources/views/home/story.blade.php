<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide relative overflow-hidden shadow-md">
            <div class="h-full">
                <img src="{{ asset('assets/images/profile/14961.jpg') }}" class="h-full object-cover" alt="">
            </div>

            <div class="absolute h-[55px] bottom-0 bg-white w-full flex justify-center">
                <span class="absolute bottom-0 h-fit top-[-25%] p-1 rounded-full bg-blue-600 ring-4 ring-white">
                    <svg width="24" height="24" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 12.998H13V17.998C13 18.2632 12.8946 18.5176 12.7071 18.7051C12.5196 18.8926 12.2652 18.998 12 18.998C11.7348 18.998 11.4804 18.8926 11.2929 18.7051C11.1054 18.5176 11 18.2632 11 17.998V12.998H6C5.73478 12.998 5.48043 12.8926 5.29289 12.7051C5.10536 12.5176 5 12.2632 5 11.998C5 11.7328 5.10536 11.4784 5.29289 11.2909C5.48043 11.1033 5.73478 10.998 6 10.998H11V5.99799C11 5.73277 11.1054 5.47842 11.2929 5.29088C11.4804 5.10334 11.7348 4.99799 12 4.99799C12.2652 4.99799 12.5196 5.10334 12.7071 5.29088C12.8946 5.47842 13 5.73277 13 5.99799V10.998H18C18.2652 10.998 18.5196 11.1033 18.7071 11.2909C18.8946 11.4784 19 11.7328 19 11.998C19 12.2632 18.8946 12.5176 18.7071 12.7051C18.5196 12.8926 18.2652 12.998 18 12.998Z"
                            fill="#fff" />
                    </svg>
                </span>

                <span class="absolute bottom-2 w-full text-[15px]">Create story</span>
            </div>
        </div>

        @for ($i = 0; $i < 10; $i++)

        <div class="swiper-slide relative overflow-hidden shadow-md">
            <div class="h-full">
                <img src="{{ asset('assets/images/logo/_61c27eab-00dc-4576-9ede-90f6d9df5b12.jpg') }}" class="h-full object-cover" alt="">
            </div>

            <img src="{{ asset('assets/flag/cambodia.png') }}" class="absolute top-4 left-4 h-[35px] w-[35px] object-cover rounded-full ring-4 ring-blue-600" alt="">
            <span class="absolute bottom-2 w-full text-[15px] text-gray-200">Kon Khmer</span>
        </div>

        @endfor


    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
