@extends('layouts.detail')
@section('title', 'About Me')
<style>
    .underline{
        text-decoration-color: red;
        text-decoration: underline;
    }
</style>

@section('header', 'About Me')
@section('container')

    <section id="#about" class="bg-gray-300">
        <div class="text-center mb-5">
            <div class="flex items-center justify-center text-center my-5 mb-5">
                <img src="{{asset('asset/img/profile/faldi.png')}}" alt="" width="500">
            </div>
            <span class="text-5xl font-bold my-5 text-gray-700 block">FALDI HARIDO FIHAN</span>
            <span class="text-4xl font-normal underline my-5 text-gray-700 block">JUNIOR WEB DEVELOPER</span>
        </div>

        <div class="grid flex items-center justify-center grid-cols-2 text-center mb-5">
            <div class="container mx-auto px-4">
                <span class="text-xl font-semibold text-gray-600">{{$greetings}}</span>
                <span class="text-lg font-semibold text-gray-600">
                    Hi I'm Faldi A junior web developer, I have an interest in technology and a career as a Web Development.
                    I'm also skillful in using Microsoft Office such as Word, Excel, Powerpoint, Access.
                    I can work under pressure and able to work well in a team and individually.
                </span>
            </div>
            <div class="container mx-auto px-4">
                <div class="text-2xl font-semibold text-gray-900">Details</div>
                <div class="text-lg font-bold text-gray-900">
                    Name:
                </div>
                <div class="text-base font-normal text-black">
                    Faldi Harido Fihan
                </div>
                <div class="text-lg font-bold text-gray-900">
                    Age:
                </div>
                <div class="text-base font-normal text-black">
                    {{$birth}}
                </div>
                <div class="text-lg font-bold text-gray-900">
                    Location:
                </div>
                <div class="text-base font-normal text-black">
                    Indramayu, Indonesia, Earth
                </div>
            </div>
        </div>

    </section>

@endsection
