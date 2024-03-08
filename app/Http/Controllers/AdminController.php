<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\event;
use App\Models\users;
use App\Models\category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\EventReservation;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalResrvations = EventReservation::count();
        $totalEvents = event::count();
        $totalCategories = category::count();
        $totalMembers = User::where('role', 'member')->count();
        $totalOrganizers = User::where('role', 'organizer')->count();
        $categories = Category::all();
        $events = Event::where('validated', 0)->get();
    
        return view('admin.dashboard', compact('events',  'categories'
        ,'totalCategories','totalEvents' ,'totalMembers','totalOrganizers','totalResrvations'));
    }


    public function getAllusers(){

        $users = User::whereIn('role',['organizer','member'])->get();
        return view('admin.allusers',compact('users'));
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
    public function update($id)
    {
//
    }

    public function destroy($id)
    {
//
    }

    public function getResrevtion(){

        $resrtvations = EventReservation::all();

        return view('admin.Resrvations',compact('resrtvations'));

    }



    public function banned(): View
    {
        return view('statistic.banned'); // Return the banned message view
    }


    public function ban($id)
    {
        $user = User::findOrFail($id);
        $user->banned = true;
        $user->save();
        
        return redirect()->back()->with('success', 'User banned successfully!');
        
    }

    public function Unban($id)
    {
        $user = User::findOrFail($id);
        $user->banned = false;
        $user->save();
        
        return redirect()->back()->with('success', 'User Unbanned successfully!');
        
    }
}
