<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Schedule a Class
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900">
                    <form action="{{ route('category.update' , $category->id ) }}" method="POST" class="max-w-lg">
                        @csrf
                        @method('PUT')

                            <div class="flex gap-6">
                                <div class="flex-1">
                                    <label class="text-sm">Title</label>
                                    <input type="text" id="name" name="name" value="{{ $category->name }}" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                                </div>
                            </div>
  
                            <div>
                                <x-primary-button>Update</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>