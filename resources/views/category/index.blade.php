<x-app-layout>
    <x-slot name="header">
        {{ __('Category') }}

        <a href="{{ route('categories.create')}}">
            <x-primary-button>
                Create
            </x-primary-button>
        </a>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <!-- Categories Table -->
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('ID') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Name') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Created At') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Updated At') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Actions') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{ $category->id }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{ $category->name }}
                            </td>

                            <td class="py-2 px-4 border-b border-gray-200">
                                {{$category->created_at}}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{$category->updated_at}}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="text-blue-600 hover:text-blue-900">{{ __('Edit') }}</a>
                                |
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('{{ __('Are you sure you want to delete this category?') }}')">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>