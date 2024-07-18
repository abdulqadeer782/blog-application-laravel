<x-app-layout>
    <x-slot name="header">
        {{ __('Posts') }}

        <a href="{{ route('posts.create')}}">
            <x-primary-button>
                Create
            </x-primary-button>
        </a>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('ID') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Title') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Category') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Author') }}
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
                    @foreach($posts as $post)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{ $post->id }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{ $post->title }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{ $post->category->name }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                <img src="{{ asset('storage/' . Str::after($post->cover_image, 'public/')) }}"
                                    alt="Cover Image" class="mt-2 w-32 h-32 object-cover" height="50px" width="50px">

                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                @if (Auth::user()->id == $post->user_id)
                                    You
                                @elseif($post->user)
                                    {{ $post->user->name }}
                                @endif
                            </td>

                            <td class="py-2 px-4 border-b border-gray-200">
                                {{$post->created_at}}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{$post->updated_at}}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                <a href="{{ route('posts.edit', $post->id) }}"
                                    class="text-blue-600 hover:text-blue-900">{{ __('Edit') }}</a>
                                |
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
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