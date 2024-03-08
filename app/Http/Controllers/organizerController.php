<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\event;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class organizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalEvents = event::count();
        $totalMembers = User::where('role', 'member')->count();
        $totalCategories = category::count();    
        $organizer = auth()->user();
        $totalEvents = event::count();
        $events = $organizer->event; 

        return view('organizer.index', compact('events','totalEvents','totalMembers','totalCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
