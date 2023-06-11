<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Course_Modul;
use App\Models\Modul;
use Illuminate\Http\Request;

class DashboardModul extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.modul.index', [
            'moduls' => Modul::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.modul.create',[
            'courses' => Course::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:moduls',
            'description' => 'required|max:512',
            // 'id_course' => 'required|exists:courses,id',
        ]);

        // if ($request->file('image')) {
        //     $validated['image'] = $request->file('image')->store('blogspot_images');
        // }
        Modul::create($validated);
        // $id_modul = Modul::all()->last()->id;
        // Course_Modul::create([
        //     'id_course' => $validated['id_course'],
        //     'id_modul' => $id_modul,
        // ]);
        return redirect('/dashboard/modul')->with('success', 'Modul created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modul $modul)
    {
        return view('dashboard.modul.show', [
            'modul' => $modul
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modul $modul)
    {
        return view('dashboard.modul.edit', [
            'modul' => $modul
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modul $modul)
    {
        $rules = ([
            'name' => 'required|max:255',
            'description' => 'required|max:512',
        ]);
        
        if($request->name != $modul->name) {
            $rules['name'] = 'required|max:255|unique:moduls';
        }
        
        $validated = $request->validate($rules);
        
        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validated['image'] = $request->file('image')->store('blogspot_images');
        // }

        Modul::where('id', $modul->id)
                ->update($validated);

        return redirect('/dashboard/modul')->with('success', 'Modul updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul $modul)
    {
        // if ($modul->image) {
        //     Storage::delete($blogpost->image);
        // }
        Modul::destroy($modul->id);
        return redirect('/dashboard/modul')->with('success', 'Modul deleted successfully!');
    }
}
