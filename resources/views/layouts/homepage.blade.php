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
    <link rel="stylesheet" href="css/style.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    </style>
</head>
<body class="flex flex-col min-h-full bg-gray-100">
{{-- NAVBAR --}}
<nav class="flex items-center bg-gray-900 p-1 flex-wrap">
    <a href="#home" class="p-2 mr-4 inline-flex items-center">
        <span class="text-xl text-white font-bold uppercase tracking-wide hover:text-gray-400 transition duration-300"
        >Faldi Harido Fihan</span
        >
    </a>
    <button
        class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler transition duration-500"
        data-target="#navigation"
    >
        <i class="material-icons">menu</i>
    </button>
    <div
        class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
        id="navigation"
    >
        <div
            class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto"
        >
            <a
                href="#home"
                class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-white transition duration-500"
            >
                <span>Home</span>
            </a>
            <a
                href="#about"
                class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-white transition duration-500"
            >
                <span>About</span>
            </a>
            <a
                href="#skill"
                class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-white transition duration-500"
            >
                <span>Skill</span>
            </a>
            <a
                href="#"
                class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-white transition duration-500"
            >
                <span>Projects</span>
            </a>
            <a
                href="#"
                class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-white transition duration-500"
            >
                <span>Visualization</span>
            </a>
            <a
                href="#"
                class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-white transition duration-500"
            >
                <span>Contact</span>
            </a>
        </div>
    </div>
</nav>
@yield('container')
<footer class="text-white text-center font-medium mt-auto p-1 bg-gray-900">
    <div>
        &copy; 2021 Faldi Harido Fihan
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
</script>
</body>
</html>
