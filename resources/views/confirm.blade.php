<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Confirm Event Booking
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($event)
                        <h2 class="text-lg font-semibold mb-4">{{ $event->title }}</h2>
                        <p>Description: {{ $event->description }}</p>
                        <p>Start Time: {{ $event->start_time }}</p>
                        <p>End Time: {{ $event->end_time }}</p>
                        <p>Location: {{ $event->location }}</p>
                        {{-- Add any other event details you want to display --}}
                        <form action="{{ route('reserv.book', $event->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-4 rounded">Confirm Booking</button>
                        </form>
                    @else
                        <p>No event found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
