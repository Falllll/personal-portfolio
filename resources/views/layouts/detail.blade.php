<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,900&display=swap"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
        integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.0/tailwind.min.css"
        integrity="sha256-CAI/7ThhltsmP2L2zKBYa7FknB3ZwFbD0nqL8FCdxdc="
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    </style>
</head>
<body class="flex flex-col min-h-full bg-gray-100">
{{-- NAVBAR --}}
<nav class="flex items-between bg-gray-900 px-2 flex-wrap">
    <div>
        <a href="{{ url('/') }}" class="inline-flex items-center hover:text-gray-400 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-gray-400 transition duration-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />Back
            </svg>
        </a>
    </div>
    <button
        class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler transition duration-500"
        data-target="#navigation"
    >
        <i class="material-icons">menu</i>
    </button>
    <div
        class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
        id="navigation">
        <div
            class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">
            <div class="scroll active inline-flex items-center pointer-events-none">
                <span class="md:text-xl text-base text-white font-bold uppercase tracking-wide hover:text-gray-400 transition duration-300"
                >@yield('header')</span>
            </div>
        </div>
    </div>
</nav>
@yield('container')
<footer class="text-white text-center text-sm md:font-medium mt-auto p-1 bg-gray-900 ">
    <div class="text-center py-1 px-1 mx-1 my-1">
        <p class="border-b-2 border-fuchsia-600 h-16">&copy; 2021 Faldi Harido Fihan</p>
    </div>
    <div class="grid grid-cols-2 gap-4 mx-5 md:px-48 h-60">
        <div class="col-start-1 col-end-1 md:mt-5 mt-3">
            <a href="https://web.facebook.com/Falldy.H/">
                <div class="text-gray-300">
                    <img class="inline-block mr-1" src="{{asset('asset/img/sosmed/facebook.png')}}" width="25" alt=""><span class="hidden md:inline-block">https://web.facebook.com/Falldy.H/</span>
                </div>
            </a>
        </div>
        <div class="col-start-2 col-end-2 md:mt-5 mt-3">
            <a href="https://github.com/falllll">
                <div class="text-gray-300">
                    <img class="inline-block mr-1" src="{{asset('asset/img/sosmed/github.png')}}" width="25" alt=""><span class="hidden md:inline-block">https://github.com/falllll</span>
                </div>
            </a>
        </div>
        <div class="col-start-1 col-end-1 md:-mt-10 ">
            <a href="https://www.instagram.com/faldiharido/">
                <div class="text-gray-300">
                    <img class="inline-block mr-1" src="{{asset('asset/img/sosmed/instagram.png')}}" width="25" alt=""><span class="hidden md:inline-block">https://www.instagram.com/faldiharido/</span>
                </div>
            </a>
        </div>
        <div class="col-start-2 col-end-2 md:-mt-10 ">
            <a href="https://twitter.com/Celiaclairee">
                <div class="text-gray-300">
                    <img class="inline-block mr-1" src="{{asset('asset/img/sosmed/twitter.png')}}" width="25" alt=""><span class="hidden md:inline-block">https://twitter.com/Celiaclairee</span>
                </div>
            </a>
        </div>
    </div>
</footer>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"
></script>
<script>
    $(document).ready(function () {
        $(".nav-toggler").each(function (_, navToggler) {
            var target = $(navToggler).data("target");
            $(navToggler).on("click", function () {
                $(target).animate({
                    height: "toggle",
                });
            });
        });
    });

    $(document).ready(function() {

        var scrollLink = $('.scroll');

        // Smooth scrolling
        scrollLink.click(function(e) {
            e.preventDefault();
            $('body,html').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000 );
        });

        // Active link switching
        $(window).scroll(function() {
            var scrollbarLocation = $(this).scrollTop();

            scrollLink.each(function() {

                var sectionOffset = $(this.hash).offset().top - 20;

                if ( sectionOffset <= scrollbarLocation ) {
                    $(this).parent().addClass('active');
                    $(this).parent().siblings().removeClass('active');
                }
            })

        })

    })
</script>
</body>
</html>
