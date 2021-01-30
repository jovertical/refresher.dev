<?php

namespace App\Http\Controllers;

use App\Enums\Level;
use App\Http\Requests\RefresherRequest;
use App\Models\Refresher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RefresherController extends Controller
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
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Refreshers/Index', [
            'refreshers' => request()
                ->user()
                ->refreshers()
                ->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Refreshers/Create', [
            'levels' => array_values(Level::getInstances())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RefresherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RefresherRequest $request)
    {
        $refresher = Auth::user()
            ->refreshers()
            ->create($request->validated());

        return redirect()->route('refreshers.items.index', $refresher);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refresher  $refresher
     * @return \Inertia\Response
     */
    public function show(Refresher $refresher)
    {
        return Inertia::render('Refreshers/Show', compact('refresher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Refresher  $refresher
     * @return \Inertia\Response
     */
    public function edit(Refresher $refresher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Refresher  $refresher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refresher $refresher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refresher  $refresher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refresher $refresher)
    {
        //
    }
}
