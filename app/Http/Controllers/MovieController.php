<?php
// app/Http/Controllers/MovieController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function mov1()
    {
        \Log::info('Route /movie/mov1 accessed');
        return view('movie.mov1');
    }

    public function mov2()
    {
        \Log::info('Route /movie/mov2 accessed');
        return view('movie.mov2');
    }

    public function mov3()
    {
        \Log::info('Route /movie/mov3 accessed');
        return view('movie.mov3');
    }

    public function mov4()
    {
        \Log::info('Route /movie/mov4 accessed');
        return view('movie.mov4');
    }

    public function mov5()
    {
        \Log::info('Route /movie/mov5 accessed');
        return view('movie.mov5');
    }
}
