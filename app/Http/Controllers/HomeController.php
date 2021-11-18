<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view ('homepage.index');
    }

    public function about()
    {

        $greetings = "";

        $time = date("H");

        $timezone = date("e");

        $dateOfBirth = '2000-05-11';
        $birth = Carbon::parse($dateOfBirth)->age;


        if ($time >= "00:00" && $time < "12:00") {
            $greetings = "Good morning";
        } else

            if ($time >= "12:00" && $time < "17:00") {
                $greetings = "Good afternoon";
            } else

                if ($time >= "17:00" && $time < "19:00") {
                    $greetings = "Good evening";
                } else

                    if ($time >= "19:00" && $time < "00:00") {
                        $greetings = "Good night";
                    }


        return view('homepage.about', compact('greetings','birth'));
    }
}
