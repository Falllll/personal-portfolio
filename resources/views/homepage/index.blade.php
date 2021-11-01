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

<section>
    <div class="text-center">
        <p class="text-2xl mt-4 mb-3 font-medium text-gray-800 text-center underline">Skill</p>
    </div>
    <div id="slick-expertise" class="slider flex items-center justify-center mx-2" data-slick='{"slidesToShow": 5, "slidesToScroll": 3}'>
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

<section>
    <div class="mt-5"></div>
</section>

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
        nextArrow: false
    });
</script>

@endsection
