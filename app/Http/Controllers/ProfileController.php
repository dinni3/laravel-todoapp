<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit()
{
    return view('profile.edit', ['user' => auth()->user()]);
}

public function update(ProfileUpdateRequest $request)
{
    $user = auth()->user();

 
    if ($request->hasFile('avatar')) {
        if ($user->avatar) {
            Storage::delete($user->avatar); 
        }
        $path = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $path;
    }

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->nickname = $request->nickname;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->city = $request->city;

    $user->save();

    return redirect()->back()->with('success', 'Profile updated!');
}

public function destroy()
{
    $user = auth()->user();
    auth()->logout();

    $user->delete();

    return redirect('/')->with('success', 'Your account has been deleted.');
}
}
