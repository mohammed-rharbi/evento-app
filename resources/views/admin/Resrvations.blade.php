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
                        📊 <!-- Dashboard Icon -->
                        <span class="ml-2">Dashboard</span>
                    </li>
                </a>
                <a href="{{ route('admins.getAllusers') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        👥 <!-- Users Icon -->
                        <span class="ml-2">Users</span>
                    </li>
                </a>
                <a href="{{ route('category.index') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📁 <!-- Categories Icon -->
                        <span class="ml-2">Categories</span>
                    </li>
                </a>
                <a href="{{ route('event.show_unvalidated') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📅 <!-- Validated Events Icon -->
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
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <h2 class="text-xl text-white font-semibold m-5">All Resrvations 📅</h2>

                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Id
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Event
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            User
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            reservationStatus
                                        </th>
                                    </tr>
                                </thead>
                             
                                <tbody>
                                    @foreach($resrtvations as $resrtvation)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$resrtvation->id}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$resrtvation->event->title;}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $resrtvation->user->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $resrtvation->reservationStatus}}
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





