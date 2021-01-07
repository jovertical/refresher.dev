<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
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
    public function update()
    {
        // 
    }
}
