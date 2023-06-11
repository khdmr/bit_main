<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        return view('blogposts.blogs', [
            'blogposts' => BlogPost::all(),
            'recentblogs' => BlogPost::take(3)->latest()->get(),
            'i'=>1,
            'singleblog' => BlogPost::latest()->first(),
        ]);
    }

    public function blog(BlogPost $blogpost)
    {
        return view('blogposts.blog', [
            'blogpost' => $blogpost,
        ]);
    }
}
