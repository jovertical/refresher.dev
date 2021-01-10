<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class PasswordController extends Controller
{
    /**
     * Create a new controller instance
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the password settings view.
     *
     * @return \Inertia\Response
     */
    public function edit()
    {
        return Inertia::render('Settings/Password');
    }

    /**
     * Handle an incoming update request.
     */
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'current_password' => __('auth.password'),
            ]);
        }

        Auth::user()->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with('message', 'Your password has been updated');
    }
}
