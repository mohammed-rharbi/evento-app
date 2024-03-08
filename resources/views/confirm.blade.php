<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            Confirm Event Booking
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($event)
                        <h2 class="text-3xl font-semibold mb-4 text-gray-800">{{ $event->title }}</h2>
                        <div class="mb-6">
                            <p class="text-lg text-gray-700 mb-2">Description:</p>
                            <p class="text-gray-800">{{ $event->description }}</p>
                        </div>
                        <div class="mb-6">
                            <p class="text-lg text-gray-700 mb-2">Start Time:</p>
                            <p class="text-gray-800">{{ $event->start_time }}</p>
                        </div>
                        <div class="mb-6">
                            <p class="text-lg text-gray-700 mb-2">End Time:</p>
                            <p class="text-gray-800">{{ $event->end_time }}</p>
                        </div>
                        <div class="mb-6">
                            <p class="text-lg text-gray-700 mb-2">Location:</p>
                            <p class="text-gray-800">{{ $event->location }}</p>
                        </div>
                        <div class="flex gap-3">
                        <form action="{{ route('reserv.book', $event->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 transition duration-300">Confirm Booking</button>
                        </form>
                        <a href="{{ route('dashboard') }}"><button class="bg-red-600 p-2 rounded text-white">Cancel</button></a>
                    </div>

                    @else
                        <p class="text-lg text-gray-700">No event found.</p>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
