<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create',[
            'roles' => Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'role_id' => 'required|exists:roles,id',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // if ($request->file('image')) {
        //     $validated['image'] = $request->file('image')->store('blogspot_images');
        // }

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);
        return redirect('/dashboard/user')->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.user.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = ([
            'name' => 'required|max:255',
            'role_id' => 'required|exists:roles,id',
            'password' => 'required|min:8',
        ]);
        
        if($request->username != $user->username) {
            $rules['username'] = 'required|max:255|unique:users';
            $rules['email'] = 'required|email|unique:users';
        }
        
        $validated = $request->validate($rules);
        
        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validated['image'] = $request->file('image')->store('blogspot_images');
        // }

        $validated['password'] = bcrypt($validated['password']);

        User::where('id', $user->id)
                ->update($validated);

        return redirect('/dashboard/user')->with('success', 'User updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // if ($user->image) {
        //     Storage::delete($blogpost->image);
        // }
        User::destroy($user->id);
        return redirect('/dashboard/user')->with('success', 'User deleted successfully!');
    }
}
