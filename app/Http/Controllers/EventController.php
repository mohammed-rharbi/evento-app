<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\event;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\EventReservation;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $organizer = auth()->user();

        $events = $organizer->event; 

        return view('organizer.index', compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     */
   /**
 * Show the form for creating a new resource.
 */
public function create()
{
    $categories = Category::all(); // Make sure to import the Category model
    return view('organizer.create_event')->with('categories', $categories);
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'start_time' => 'required|after:now',
        'end_time' => 'required|after:now|after:start_time',
        'location' => 'required|string|max:255',
        'categories_id' => 'required',
        'numberOfPlacesAvailable' => 'required|integer|min:1',
    ]);

    
    $event = new Event();
    $event->organizer_id = Auth::id();
    $event->title = $validatedData['title'];
    $event->description = $validatedData['description'];
    $event->start_time = $validatedData['start_time']; 
    $event->end_time = $validatedData['end_time'];
    $event->location = $validatedData['location'];
    $event->categories_id = $validatedData['categories_id'];
    $event->numberOfPlacesAvailable = $validatedData['numberOfPlacesAvailable'];

    
    $event->save();


    return redirect()->route('events.index')->with('success', 'Event created successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all(); 
        $event = Event::findOrFail($id);

        $event->start_time = Carbon::parse($event->start_time);
        $event->end_time = Carbon::parse($event->end_time);

        return view('organizer.edite', compact('event','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_time' => 'required|after:now',
            'end_time' => 'required|after:start_time|after:now',   
            'location' => 'required|string|max:255',
            'categories_id' => 'required',
            'numberOfPlacesAvailable' => 'required|integer|min:1',
        ]);

        
    
        $event = Event::findOrFail($id);
        $event->update($validatedData);
    
        return redirect()->route('events.index')->with('success', 'Event updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }


public function validateEvent($id)
{
    $event = Event::findOrFail($id);
    
    // Update the 'validated' column to mark the event as validated
    $event->update(['validated' => 1]);

    return redirect()->back()->with('success', 'Event validated successfully!');
}


public function book(Request $request, Event $event)
{

    $reservation = new EventReservation();
    $reservation->user_id = auth()->id();
    $reservation->event()->associate($event);
    $reservation->save();

    // Optionally, you can redirect the user or return a response
    return redirect()->back()->with('success', 'Event booked successfully!');
}



}
