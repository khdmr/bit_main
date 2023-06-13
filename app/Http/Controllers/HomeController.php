<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return view('home', [
                'user' => auth()->user()->name,
                'title' => 'Home',
                'course' => Course::first(),
                'blogs' => BlogPost::all(),
                'i' => 1,
            ]);
        }
        return view('home', [
            'title' => 'Home',
            'course' => Course::first(),
            'blogs' => BlogPost::all(),
            'i' => 1,
        ]);
    }
}
