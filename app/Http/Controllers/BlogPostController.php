<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return view('blogposts.blogs', [
                'user' => auth()->user()->name,
                'title' => 'Blog',
                'blogposts' => BlogPost::all(),
                'recentblogs' => BlogPost::take(3)->latest()->get(),
                'i'=>1,
                'singleblog' => BlogPost::latest()->first(),
            ]);
        }
        return view('blogposts.blogs', [
            'title' => 'Blog',
            'blogposts' => BlogPost::all(),
            'recentblogs' => BlogPost::take(3)->latest()->get(),
            'i'=>1,
            'singleblog' => BlogPost::latest()->first(),
        ]);
    }

    public function blog(BlogPost $blogpost)
    {
        if (auth()->user()) {
            return view('blogposts.blog', [
                'user' => auth()->user()->name,
                'title' => $blogpost->title,
                'blogpost' => $blogpost,
            ]);
        }
        return view('blogposts.blog', [
            'title' => $blogpost->title,
            'blogpost' => $blogpost,
        ]);
    }
}
