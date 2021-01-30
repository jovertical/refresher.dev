<?php

namespace App\Http\Controllers;

use App\Models\Refresher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RefresherItemController extends Controller
{
    /**
     * Create a new controller instance
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Refresher  $refresher
     * @return \Inertia\Response
     */
    public function index(Refresher $refresher)
    {
        if ($refresher->user_id !== Auth::id()) {
            abort(403);
        }

        return Inertia::render('Refreshers/Items', [
            'refresher' => $refresher
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\Refresher  $refresher
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Refresher $refresher, Request $request)
    {
        //
    }
}
