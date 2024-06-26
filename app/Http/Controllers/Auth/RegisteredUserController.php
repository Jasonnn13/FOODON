<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Log out the current user if they are authenticated
        if (Auth::check()) {
            Auth::logout();
        }

        // Validate the incoming request data
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nomor' => ['required', 'numeric'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        // Create a new user
        $user = User::create([
            'email' => $request->email,
            'nomor' => $request->nomor,
            'password' => Hash::make($request->password),
        ]);

        // Trigger the registered event
        event(new Registered($user));

        // Log in the newly registered user
        Auth::login($user);

        // Redirect to the home page
        return redirect(RouteServiceProvider::HOME);
    }
}
