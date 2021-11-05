@extends('layouts.homepage')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<style>
    .bg-image {
        background-image: url(asset/img/town.png);
        filter: brightness(100%);
    }
    .picture {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }



    .effect {
        color: #146139;
    }

    figure.effect img {
        width: -webkit-calc(100% + 20px);
        width: calc(100% + 20px);
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(-10px,0,0);
        transform: translate3d(-10px,0,0);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    figure.effect:hover img {
        opacity: 0.2;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }

    figure.effect figcaption {
        text-align: left;
    }

    figure.effect h3 {
        position: relative;
        overflow: hidden;
        padding-bottom: 20px;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
    }

    figure.effect:hover h3 {
        opacity: 1;
    }

    figure.effect h3::after {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: #fff;
        content: '';
        -webkit-transition: -webkit-transform 0.35s;
        transition: transform 0.35s;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0);
    }

    figure.effect:hover h3::after {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }

    figure.effect p {
        padding-top: 10px;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0);
    }

    figure.effect:hover p {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
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
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@section('title' , 'Faldi Harido Fihan')
@section('container')

{{-- Header --}}
    <section id="home" class="overflow-x-hidden single-item backdrop-opacity-50">
        <div class="relative bg-center bg-cover bg-image">
            <div class="grid min-h-screen py-20 place-items-center">
                <div class="flex flex-col items-center text-center text-white responsive">
                    <div class="pt-5 transform hover:scale-110 transition duration-300">
                        <a href="" target="" class="py-2 px-2 font-medium text-white bg-blue-700 rounded transform hover:scale-105 hover:bg-blue-900 transition duration-300">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--End Header--}}

{{--About Me--}}
    <section id="about" class="pt-5 bg-gray-300">
        <div class="text-center">
            <p class="text-2xl font-bold text-gray-800 text-center underline">About me</p>
        </div>
        <div class="flex items-center justify-center grid md:grid-cols-2 text-center text-gray-900">
            <div class="p-5 text-lg font-medium transform hover:scale-105 transition duration-300">Hi I'm Faldi A junior web developer, I have an interest in technology and a career as a Web Development. I'm also skillful in using Microsoft Office such as Word, Excel, Powerpoint, Access. I can work under pressure and able to work well in a team and individually.</div>
            <div class="p-3 mb-5 float-right">
                <img class="picture transform hover:scale-110 hover:rotate-3 transition duration-300" src="{{asset('asset/img/profile/fall.png')}}" height="300" alt="">
            </div>
        </div>
    </section>
{{--End About Me--}}

{{--Abilities--}}
<section id="abilities" class="mb-5">
    <div class="text-center">
        <p class="text-2xl mt-4 mb-3 font-bold text-gray-800 text-center underline">Abilities</p>
    </div>
    <div id="slick-expertise" class="slider flex items-center justify-center mx-2">
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">HTML</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/html5.svg')}}'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">CSS</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/css3.svg')}}'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">JAVASCRIPT</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/javascript.svg')}}'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">PHP</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/php.svg')}}'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">LARAVEL</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/Laravel.svg')}}'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">VUE .JS</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/vue.svg')}}'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">TAILWINDCSS</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/tailwind.svg')}}.svg'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">MYSQL</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/mysql.svg')}}'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">REACT NATIVE</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/react.svg')}}'>
            </div>
        </div>
        <div class="flex flex-col items-center mb-4 justify-center">
            <div>
                <p class="text-black text-center font-bold mb-5">NODE .JS</p>
            </div>
            <div id="slick-image" class="border shadow-md rounded-full">
                <img class="w-full h-24" src='{{asset('asset/img/abilities/node.svg')}}'>
            </div>
        </div>
    </div>
</section>
{{--EndAbilities--}}

{{--Experience--}}

<section id="experience" class="mt-5 bg-gray-300">
    <div class="text-center">
        <p class="text-2xl mt-4 mb-3 font-bold text-gray-800 text-center underline">Experience</p>
    </div>
    <div class="flex items-center grid md:grid-cols-2 text-center text-gray-900">
        <div class="my-3 border-transparent md:border-r-2 md:border-gray-600 ">
            <div class="text-xl font-bold text-gray-700 ">Education</div>
            <div class="md:flex md:justify-between px-5">
                <div class="md:col-start-1 md:inline-block col-end-3 my-3">
                    <div class="font-semibold md:font-bold mx-3">Politeknik negeri indramayu</div>
                    <div class="md:my-3 font-normal">Jun 2019 - current</div>
                </div>
                <div class="md:col-start-1 block md:inline-block col-end-3 my-3">
                    <div class="font-semibold md:font-bold mx-3">Informatics Engineering(course)</div>
                    <div class="hidden md:inline-block max-w-prose mt-2 mx-5">The education was mainly programming concept, but I also learned about SQL, Java, PHP, MVC, UML and more. During my time in college, I specialized in PHP Web Developer. Here I learned about the importance of OOP, web and user experience and design.</div>
                    <div class="md:my-3 font-normal text-blue-600"><i class='fas fa-map-marker-alt'></i>Indramayu</div>
                </div>
            </div>
        </div>
        <div class="my-3">
            <div class="text-xl font-bold text-gray-700">Career</div>
            <div class="md:flex md:justify-between px-5">
                <div class="md:col-start-1 md:inline-block col-end-3 my-3">
                    <div class="font-semibold md:font-bold mx-3">Mahardika Solusi Teknologi</div>
                    <div class="md:my-3 font-normal">Jul 2021 - current</div>
                </div>
                <div class="md:col-start-1 block md:inline-block col-end-3 my-3">
                    <div class="font-semibold md:font-bold mx-3">Internship - Web Developer</div>
                    <div class="hidden md:inline-block max-w-prose mt-2 mx-5">I did my first internship at a company named Mahardika Solusi Teknologi. There I learned to apply my knowledge of PHP. Mahardika Solusi Teknologi was a profesional IT Consultant and Software Development Service in Bandung, Indonesia, with more than 50 awesome clients including tokogampang.com, rajaherbal.com, palapa, to name a few.</div>
                    <div class="md:my-3 font-normal text-blue-600"><i class='fas fa-map-marker-alt'></i>Bandung</div>
                </div>
            </div>
        </div>


    </div>
</section>

{{--EndExperience--}}

{{--Projects--}}
<section id="projects" class="pt-5 mb-5">
    <div class="text-center">
        <p class="text-2xl mt-4 mb-3 font-bold text-gray-800 text-center underline">Projects</p>
    </div>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4 project">

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <div class="overflow-hidden rounded-lg shadow-lg bg-gray-300">

                    <img class="w-full" src="{{asset('asset/img/projects/private/Elaina.png')}}" alt="Mountain">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Mountain</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>

                </div>
                <!-- END Article -->

            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <div class="overflow-hidden rounded-lg shadow-lg">

                    <img class="w-full" src="{{asset('asset/img/projects/private/Elaina.png')}}" alt="Mountain">
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

                    <img class="w-full" src="{{asset('asset/img/projects/private/Elaina.png')}}" alt="Mountain">
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

                    <img class="w-full" src="{{asset('asset/img/projects/private/Elaina.png')}}" alt="Mountain">
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

                    <img class="w-full" src="{{asset('asset/img/projects/private/Elaina.png')}}" alt="Mountain">
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

                    <img class="w-full" src="{{asset('asset/img/projects/private/Elaina.png')}}" alt="Mountain">
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

{{--Real Project--}}
<section id="works" class="pt-3 bg-gray-300">
    <div class="text-center">
        <p class="text-2xl mt-4 mb-3 font-bold text-gray-800 text-center underline">Works</p>
    </div>
    <div class="text-center">
        <p class="border-b-2 border-fuchsia-600 pb-2 mb-3 text-lg text-gray-600 font-medium italic">
            “This is my real project”
        </p>
    </div>
    <div class="flex items-center text-center grid grid-cols-1 md:grid-cols-6 md:gap-4 mb-5">
        <div class="bg-white md:col-start-2 md:col-end-4 my-3 mx-2">
            <a href="">
                <figure class="relative cursor-pointer effect bg-gray-300">
                    <img src="{{asset('asset/img/projects/private/Skadi.jpg')}}" width="500" alt="">
                    <figcaption class="absolute text-lg -mt-72 px-4">
                        <h3 class="font-semibold text-2xl">Ini Judul Project</h3>
                        <p>Deskripsi singkat</p>
                        <p class="mt-28"><strong>Tags:</strong> <br />Action, Fantasy, Romance</p>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="bg-white md:col-start-4 md:col-end-6 my-3 mx-2">
            <a href="">
                <figure class="relative cursor-pointer effect bg-gray-300">
                    <img src="{{asset('asset/img/projects/private/Elaina.png')}}" width="500" alt="">
                    <figcaption class="absolute text-lg -mt-72 px-4">
                        <h3 class="font-semibold text-2xl">Ini Judul Project</h3>
                        <p>Deskripsi singkat</p>
                        <p class="mt-28"><strong>Tags:</strong> <br />Action, Fantasy, Romance</p>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="bg-white md:col-start-2 md:col-end-4 my-3 mx-2">
            <a href="">
                <figure class="relative cursor-pointer effect bg-gray-300">
                    <img src="{{asset('asset/img/projects/private/Elaina.png')}}" width="500" alt="">
                    <figcaption class="absolute text-lg -mt-72 px-4">
                        <h3 class="font-semibold text-2xl">Ini Judul Project</h3>
                        <p>Deskripsi singkat</p>
                        <p class="mt-28"><strong>Tags:</strong> <br />Action, Fantasy, Romance</p>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="bg-white md:col-start-4 md:col-end-6 my-3 ">
            <a href="">
                <figure class="relative cursor-pointer effect bg-gray-300">
                    <img src="{{asset('asset/img/projects/private/Skadi.jpg')}}" width="500" alt="">
                    <figcaption class="absolute text-lg -mt-72 px-4">
                        <h3 class="font-semibold text-2xl">Ini Judul Project</h3>
                        <p>Deskripsi singkat</p>
                        <p class="mt-28"><strong>Tags:</strong> <br />Action, Fantasy, Romance</p>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</section>
{{-- End RealProject --}}

<section id="contact" class="bg-white">
    <div class="text-center">
        <p class="text-2xl mt-4 mb-2 font-bold text-gray-800 text-center underline">Contact</p>
    </div>
    <div class="text-center">
        <p class="border-b-2 border-fuchsia-600 pb-2 mb-3 text-lg text-gray-600 font-medium italic">“Tak kenal maka tak sayang”</p>
    </div>
      <div
        class="max-w-screen-xl my-8 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
        <div class="flex flex-col text-center">
          <div>
            <h2 class="text-4xl lg:text-5xl font-bold leading-tight mb-3">Lets talk about everything!</h2>
          </div>
          <div class="text-center">
              <img class="rounded-md" src="{{asset('asset/img/projects/private/Skadi.jpg')}}" alt="">
          </div>
        </div>
        <div class="">
          <div>
            <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
            <input class="w-full bg-gray-300 text-gray-900 mt-2 p-2 rounded-lg focus:outline-none focus:shadow-outline"
              type="text" placeholder="">
          </div>
          <div class="mt-8">
            <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
            <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              type="text">
          </div>
          <div class="mt-8">
            <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
            <textarea
              class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
          </div>
          <div class="mt-8">
            <button
              class="uppercase text-sm font-bold tracking-wide bg-indigo-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
              Send Message
            </button>
          </div>
        </div>
      </div>
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
        nextArrow: false,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 5,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
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
        ]
    });

    $('.project').slick({
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
        ]
    });
</script>

@endsection
