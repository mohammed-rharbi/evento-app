<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
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
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="py-12 px-6">
                <a href="{{ route('category.create') }}">
                    <button class="bg-green-700 p-2 text-white rounded mb-3 hover:bg-green-900">Create category</button>
                </a>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">   
                        <h2 class="text-lg font-semibold mb-4">Categories  📁</h2>
                        <ul class="space-y-4">
                            @foreach($categories as $category)
                                    <li class="bg-gray-100 dark:bg-gray-700 p-4 rounded-md flex justify-between items-center">
                                        <span>{{ $category->name }}</span>
                                        <div class="flex gap-2">
                                            <a href="{{ route('category.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-800">
                                                <button class="bg-blue-500 text-white p-2 rounded hover:text-red-800">🔃Edit</button>
                                            </a>
                                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white p-2 rounded hover:text-red-800" onclick="return confirm('Are you sure you want to delete this category?')">❌Delete</button>
                                            </form>
                                        </div>
                                    </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
