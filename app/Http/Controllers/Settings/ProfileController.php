<?php

namespace App\Http\Controllers\Settings;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the profile settings view.
     *
     * @return \Inertia\Response
     */
    public function edit()
    {
        return Inertia::render('Settings/Profile');
    }

    /**
     * Handle an incoming update request.
     * 
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $formData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore(Auth::id())
            ],
        ]);

        $user = Auth::user();
        $user->update($formData);

        return back()->with('status', [
            'status' => Status::Success,
            'title'  => __('Successfully updated'),
            'body'   => __('Your profile information has been updated')
        ]);
    }
}
