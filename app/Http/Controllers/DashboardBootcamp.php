<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class DashboardBootcamp extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.bootcamp.index',[
            'title' => 'Bootcamp',
            'orang' => auth()->user(),
            'courses' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.bootcamp.create',[
            'title' => 'Create Bootcamp',
            'orang' => auth()->user(),
            'categories' => CourseCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_category' => 'required|exists:course_categories,id',
            'title' => 'required|max:255|unique:courses',
            'summary' => 'required|max:512',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Course::create($validated);
        return redirect('/dashboard/bootcamp')->with('success', 'Bootcamp created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $bootcamp)
    {
        return view('dashboard.bootcamp.show', [
            'title' => $bootcamp->title,
            'orang' => auth()->user(),
            'course' => $bootcamp,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $bootcamp)
    {
        return view('dashboard.bootcamp.edit', [
            'title' => 'Edit Bootcamp',
            'orang' => auth()->user(),
            'course' => $bootcamp,
            'categories' => CourseCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $bootcamp)
    {
        $rules = ([
            'id_category' => 'required|exists:course_categories,id',
            'summary' => 'required|max:512',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
        
        if($request->title != $bootcamp->title) {
            $rules['title'] = 'required|max:255|unique:courses';
        }
        
        $validated = $request->validate($rules);
        
        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validated['image'] = $request->file('image')->store('blogspot_images');
        // }

        Course::where('id', $bootcamp->id)
                ->update($validated);

        return redirect('/dashboard/bootcamp')->with('success', 'Bootcamp updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $bootcamp)
    {
        // if ($bootcamp->image) {
        //     Storage::delete($bootcamp->image);
        // }
        Course::destroy($bootcamp->id);
        return redirect('/dashboard/bootcamp')->with('success', 'Bootcamp deleted successfully!');
    }
}
