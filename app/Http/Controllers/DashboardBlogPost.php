<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardBlogPost extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.blogposts.index', [
            'title' => 'Blog Posts',
            'orang' => auth()->user(),
            'blogposts' => BlogPost::all('id', 'id_author', 'title', 'summary')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blogposts.create',[
            'title' => 'Dashboard | Create Blog Post',
            'orang' => auth()->user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255|unique:blog_posts',
            'summary' => 'required|max:512',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('blogspot_images');
        }

        $validated['id_author'] = auth()->user()->id;

        BlogPost::create($validated);
        return redirect('/dashboard/blogposts')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogpost)
    {
        return view('dashboard.blogposts.post', [
            'title' => $blogpost->title,
            'orang' => auth()->user(),
            'blogpost' => $blogpost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blogpost)
    {
        return view('dashboard.blogposts.edit', [
            'title' => 'Edit Blog Post',
            'orang' => auth()->user(),
            'blogpost' => $blogpost
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogpost)
    {
        $rules = ([
            'summary' => 'required|max:512',
            'content' => 'required',
            'image' => 'image|file|max:2048',
        ]);
        
        if($request->title != $blogpost->title) {
            $rules['title'] = 'required|max:255|unique:blog_posts';
        }
        
        $validated = $request->validate($rules);
        
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('blogspot_images');
        }

        $validated['id_author'] = auth()->user()->id;

        BlogPost::where('id', $blogpost->id)
                ->update($validated);

        return redirect('/dashboard/blogposts')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogpost)
    {
        if ($blogpost->image) {
            Storage::delete($blogpost->image);
        }
        BlogPost::destroy($blogpost->id);
        return redirect('/dashboard/blogposts')->with('success', 'Post deleted successfully!');
    }
}
