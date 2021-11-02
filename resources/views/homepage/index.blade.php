@extends('layouts.homepage')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<style>
    .bg-image {
        background-image: url(img/town.png);
        filter: brightness(100%);
    }

    .picture {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    #slick-image {
        margin-left: auto;
        margin-right: auto;
        max-width: 80rem;
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        width: 100%;
    }

    #slick-expertise {
        margin-left: auto;
        margin-right: auto;
        max-width: 80rem;
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        width: 100%;
    }


</style>
@section('title' , 'Faldi Harido Fihan')
@section('container')

{{-- Header --}}
    <section id="home" class="overflow-x-hidden single-item backdrop-opacity-50">
        <div class="relative bg-center bg-cover bg-image">
            <div class="grid min-h-screen py-20 place-items-center">
                <div class="flex flex-col items-center text-center text-white responsive">
                    <div class="pt-5">
                        <a href="" target="" class="py-2 px-2 font-medium text-white bg-blue-700 rounded hover:bg-blue-900 transition duration-300">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--End Header--}}

{{--About Me--}}
    <section id="about" class="pt-5 bg-gray-300">
        <div class="text-center">
            <p class="text-2xl font-medium text-gray-800 text-center underline">About me</p>
        </div>
        <div class="flex items-center justify-center grid md:grid-cols-2 text-center text-gray-900">
            <div class="p-5 text-lg font-medium transform hover:scale-105 transition duration-300">Hi I'm Faldi A junior web developer, I have an interest in technology and a career as a Web Development. I'm also skillful in using Microsoft Office such as Word, Excel, Powerpoint, Access. I can work under pressure and able to work well in a team and individually.</div>
            <div class="p-3 mb-5 float-right">
                <img class="picture transform hover:scale-110 hover:rotate-3 transition duration-300" src="{{asset('img/profile/fall.png')}}" height="300" alt="">
            </div>
        </div>
    </section>
{{--End About Me--}}

{{--Skill--}}
<section id="skill" class="mb-5">
    <div class="text-center">
        <p class="text-2xl mt-4 mb-3 font-medium text-gray-800 text-center underline">Skill</p>
    </div>
    <div id="slick-expertise" class="slider flex items-center justify-center mx-2" data-slick='{"slidesToShow": 4, "slidesToScroll": 3}'>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">HTML</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/html5.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">CSS</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/css3.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">JAVASCRIPT</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/javascript.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">PHP</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/php.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">LARAVEL</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/Laravel.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">VUE .JS</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/vue.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">TAILWINDCSS</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/tailwind.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">MYSQL</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/mysql.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">REACT NATIVE</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/react.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">NODE .JS</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='img/skill/node.svg'>
            </div>
        </div>
    </div>
</section>
{{--Endskill--}}

{{--Projects--}}
<section id="projects" class="pt-5 bg-gray-300 mb-5">
    <div class="text-center">
        <p class="text-2xl mt-4 mb-3 font-medium text-gray-800 text-center underline">Projects</p>
    </div>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4 responsive">

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <div class="overflow-hidden rounded-lg shadow-lg">

                    <img class="w-full" src="{{asset('img/Elaina.png')}}" alt="Mountain">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Mountain</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>

                </div>
                <!-- END Article -->

            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <div class="overflow-hidden rounded-lg shadow-lg">

                    <img class="w-full" src="img/Elaina.png" alt="Mountain">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Mountain</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>

                </div>
                <!-- END Article -->

            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <div class="overflow-hidden rounded-lg shadow-lg">

                    <img class="w-full" src="img/Elaina.png" alt="Mountain">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Mountain</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>

                </div>
                <!-- END Article -->

            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <div class="overflow-hidden rounded-lg shadow-lg">

                    <img class="w-full" src="img/Elaina.png" alt="Mountain">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Mountain</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>

                </div>
                <!-- END Article -->

            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <div class="overflow-hidden rounded-lg shadow-lg">

                    <img class="w-full" src="img/Elaina.png" alt="Mountain">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Mountain</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>

                </div>
                <!-- END Article -->

            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <div class="overflow-hidden rounded-lg shadow-lg">

                    <img class="w-full" src="img/Elaina.png" alt="Mountain">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Mountain</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>

                </div>
                <!-- END Article -->

            </div>
            <!-- END Column -->

        </div>
    </div>
</section>
{{--Endprojects--}}




<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $('.slider').slick({
        dots: false,
        prevArrow: false,
        nextArrow: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('.responsive').slick({
        dots: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>

@endsection
