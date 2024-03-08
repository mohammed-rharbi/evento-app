<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\event;
use App\Models\users;
use Illuminate\Http\Request;

class memberCntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestEvents = event::where('validated',1)->latest()->limit(1)->get();
        $Category = category::all(); 
        $events = event::where('validated', 1)->paginate(6);

        return view('Evento',compact('events','latestEvents'));
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
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
