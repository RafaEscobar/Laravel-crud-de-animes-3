<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("users.index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'profile_photo_path' => 'image|required'
        ]);
        
        $imageUrl = $request->profile_photo_path->store('public/profilePhoto');

        User::create(
            array_merge(
                $request->all(),
                ['password' => bcrypt($request->password)],
                ['profile_photo_path' => $imageUrl]
            )
        );

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Display the specified resource.
     */
    public function showProfile()
    {
        return view('profile.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     *  Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {        
        ( $request->profile_photo_path ) ? Storage::delete($user->profile_photo_path) : null;
        $imagePath = ( $request->profile_photo_path ) ? $request->profile_photo_path->store('public/profilePhoto') : $user->profile_photo_path;
        $pass = ( $request->password ) ? bcrypt($request->password) : $user->password;

        $user->update(
            array_merge(
                $request->all(),
                ['password' => $pass],
                ['profile_photo_path' => $imagePath]
            )
        );
        
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Storage::delete($user->profile_photo_path);
        $user->delete();
        return redirect()->route('user.index');
    }
}
