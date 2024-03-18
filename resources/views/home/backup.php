@extends('app')
@include('components.meta', [
'title' => "",
])


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        border-radius: 10px;
        height: 250px;
        width: 141px;
        text-align: center;
        font-size: 18px;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-button-disabled{
        display: none;
    }

    .swiper-button-next,
    .swiper-button-prev{
        background-color: aliceblue;
        width: 45px;
        height: 45px;
        border-radius: 50%;
    }

    .swiper-button-next::after{
        font-size: 19px;
        margin-right: -4px;
        color: #b0b3b8;
    }

    .swiper-button-prev::after{
        font-size: 19px;
        margin-right: 4px;
        color: #b0b3b8;
    }


</style>
@endsection

@section('body')
<main class="w-full max-w-4xl mx-auto font-app relative">
    <div class="fixed left-0 top-[78px] h-[90vh] max-w-[360px] w-full overflow-y-scroll px-3 hidden xl:block">
        @include('home.sidebar')
    </div>

    <div class="flex justify-center items-center w-full">
        <div class="max-w-[680px] w-[100%] mt-[55px]">
            <section class="py-6">
                @include('home.story')
            </section>

            <section>
                @include('home.create-post')
            </section>

            <section class="pt-4">
                @include('home.content')
            </section>
        </div>
    </div>

    <div class="fixed right-0 top-[78px] h-[90vh] max-w-[360px] w-full overflow-y-scroll hidden lg:block">
        @include('home.rightbar')
    </div>

</main>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        mousewheel: true,
        direction: "horizontal",
        slidesPerView: 4,
        spaceBetween: 10,
        freeMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endsection
