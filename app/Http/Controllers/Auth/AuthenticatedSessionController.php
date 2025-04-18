<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{

    public function create(): View
    {
        return view('auth.login');
    }


    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard'); // Ensure '/dashboard' is defined
        }

        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }


    public function destroy(): RedirectResponse
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
