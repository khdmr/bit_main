<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class DashboardCategoryBootcamp extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.bootcampcategory.index', [
            'title' => 'Bootcamp Category',
            'orang' => auth()->user(),
            'categories' => CourseCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.bootcampcategory.create',[
            'title' => 'Create Bootcamp Category',
            'orang' => auth()->user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_category' => 'required|max:255|unique:course_categories',
        ]);

        CourseCategory::create($validated);
        return redirect('/dashboard/bootcampcategory')->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseCategory $bootcampcategory)
    {
        return view('dashboard.bootcampcategory.category', [
            'title' => $bootcampcategory->name_category,
            'orang' => auth()->user(),
            'bootcampcategory' => $bootcampcategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseCategory $bootcampcategory)
    {
        return view('dashboard.bootcampcategory.edit', [
            'title' => 'Edit Category',
            'orang' => auth()->user(),
            'bootcampcategory' => $bootcampcategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseCategory $bootcampcategory)
    {
        $rules = ([
            'name_category' => 'required|max:255|unique:course_categories',
        ]);
        
        if($request->name_category != $bootcampcategory->name_category) {
            $rules['name_category'] = 'required|max:255|unique:course_categories';
        }
        
        $validated = $request->validate($rules);

        CourseCategory::where('id', $bootcampcategory->id)
                ->update($validated);

        return redirect('/dashboard/bootcampcategory')->with('success', 'Category updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseCategory $bootcampcategory)
    {
        CourseCategory::destroy($bootcampcategory->id);
        return redirect('/dashboard/bootcampcategory')->with('success', 'Category deleted successfully!');
    }
}
