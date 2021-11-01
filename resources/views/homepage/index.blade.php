@extends('layouts.homepage')

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

    .about {
        text-align: center;
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

{{--About Me--}}
    <section id="about" class="pt-5 bg-gray-300">
        <div class="text-center">
            <p class="text-2xl font-medium text-gray-800 text-center underline">About me</p>
        </div>
        <div class="flex items-center justify-center grid md:grid-cols-2 text-center text-gray-900">
            <div class="p-5 text-lg font-medium">Hi I'm Faldi A junior web developer, I have an interest in technology and a career as a Web Development. I'm also skillful in using Microsoft Office such as Word, Excel, Powerpoint, Access. I can work under pressure and able to work well in a team and individually.</div>
            <div class="p-3 mb-5 float-right">
                <img class="picture" src="{{asset('img/profile/fall.png')}}" height="300" alt="">
            </div>
        </div>
    </section>

@endsection
