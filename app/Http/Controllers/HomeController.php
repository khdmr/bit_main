<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'course' => Course::where('title', 'Analisis Data dan Pembelajaran Mesin')->get(),
            'blogs' => BlogPost::where('id','>','10')->get(),
            'i' => 1,
        ]);
    }
}
