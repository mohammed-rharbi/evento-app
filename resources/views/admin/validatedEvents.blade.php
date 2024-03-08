<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Sidebar -->
    <div class="flex">
        <div class="bg-gray-800 text-white h-screen w-64 flex flex-col">
            <div class="p-4 bg-gray-900 text-center">Admin Dashboard</div>
            <ul class="flex-1 overflow-y-auto">
                <a href="{{ route('admin.index') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📊 
                        <span class="ml-2">Dashboard</span>
                    </li>
                </a>
                <a href="{{ route('admins.getAllusers') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        👥 
                        <span class="ml-2">Users</span>
                    </li>
                </a>
                <a href="{{ route('category.index') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📁 
                        <span class="ml-2">Categories</span>
                    </li>
                </a>
                <a href="{{ route('event.show_unvalidated') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📅 
                        <span class="ml-2">Validated Events</span>
                    </li>
                </a>
                <a href="{{ route('resrvations.getResrevtion') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📅<!-- Validated Events Icon -->
                        <span class="ml-2">All Resrvations</span>
                    </li>
                </a>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="flex-1">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <!-- Table -->
                        <h2 class="text-xl text-white font-semibold m-5">Validated Events ✅</h2>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Event title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Description
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Category
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Start Time
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            End Time
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Location
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Available places
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                             
                                <tbody>
                                    @foreach($events as $event)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$event->title}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$event->description}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $event->category->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $event->start_time}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $event->end_time}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $event->location}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $event->numberOfPlacesAvailable }}
                                        </td>
                                        <td>
                                            <form action="{{ route('event.Unvalidate', $event->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-5">Unvalidate</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>










