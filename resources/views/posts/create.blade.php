<x-app-layout>
    <x-slot name="header">
        {{ __('Create Post') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Post Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required autocomplete="title">
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                    <select name="category_id" id="category_id"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required>
                        <option value="">Select a Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="cover_image" class="block text-sm font-medium text-gray-700">Cover Image</label>
                    <input type="file" name="cover_image" id="cover_image" class="mt-1 block w-full">
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">Post Content</label>
                    <textarea name="content" id="content" rows="4"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required autocomplete="content">{{ old('content') }}</textarea>
                </div>

                <div class="mt-4">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Create Post') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>