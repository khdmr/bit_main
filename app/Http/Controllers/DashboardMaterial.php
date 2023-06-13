<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Modul;
use Illuminate\Http\Request;

class DashboardMaterial extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.material.index', [
            'title' => 'Material',
            'orang' => auth()->user(),
            'materials' => Material::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.material.create', [
            'title' => 'Create Material',
            'orang' => auth()->user(),
            'moduls' => Modul::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255|unique:materials',
            'content' => 'required|max:3000',
            'modul_id' => 'required|exists:moduls,id',
        ]);

        // if ($request->file('image')) {
        //     $validated['image'] = $request->file('image')->store('blogspot_images');
        // }

        Material::create($validated);
        return redirect('/dashboard/material')->with('success', 'Material created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        return view('dashboard.material.show', [
            'title' => $material->title,
            'orang' => auth()->user(),
            'material' => $material
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view('dashboard.material.edit', [
            'title' => 'Edit Material',
            'orang' => auth()->user(),
            'material' => $material,
            'moduls' => Modul::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        $rules = ([
            'content' => 'required|max:3000',
            'modul_id' => 'required|exists:moduls,id',
            // 'image' => 'image|file|max:2048',
        ]);
        
        if($request->title != $material->title) {
            $rules['title'] = 'required|max:255|unique:materials';
        }
        
        $validated = $request->validate($rules);
        
        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validated['image'] = $request->file('image')->store('blogspot_images');
        // }

        Material::where('id', $material->id)
                ->update($validated);

        return redirect('/dashboard/material')->with('success', 'Material updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        // if ($material->image) {
        //     Storage::delete($material->image);
        // }
        Material::destroy($material->id);
        return redirect('/dashboard/material')->with('success', 'Material deleted successfully!');
    }
}
