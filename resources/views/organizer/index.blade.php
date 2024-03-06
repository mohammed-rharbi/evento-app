<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Events
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
     
                <a href="{{ route('events.create') }}">
                   <button class="bg-green-500 p-2 rounded mb-3 text-white hover:bg-green-700 ">Create Event</button> 
                </a>
         
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if ($events)
                @foreach ($events as $event)
                    <div class="bg-gray-300 hover:bg-gray-700 hover:text-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">{{ $event->title }}</h3>
                            <p class=" mb-4">{{ $event->description }}</p>
                            <p class="">Start Time: {{ $event->start_time }}</p>
                            <p class="">End Time: {{ $event->end_time }}</p>
                            <p class="">Location: {{ $event->location }}</p>
                            {{-- <p class="text-gray-500">Location: {{ $event->categories_id }}</p> --}}
                            <p class="">Places Available: {{ $event->numberOfPlacesAvailable }}</p>
                            <!-- Add more details as needed -->
                            <div class="mt-4">
                                <a href="{{ route('events.show', $event->id) }}" class="text-blue-500 hover:text-blue-700">View Details</a>
                                <a href="{{ route('events.edit', $event->id) }}" class="text-green-500 hover:text-green-700 ml-4">Edit</a>
                                <form id="delete-form" action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this event?')" class="text-red-500 hover:text-red-700 ml-4">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                     <p class="text-white">No events available.</p>
                @endif
            </div>  
        </div>
    </div>
</x-app-layout>
