<x-index-layout>
    <section>
        <div class="flex justify-between py-3 items-center">
            <h2 class="text-2xl">All Posts</h2>

            <form action="{{ route('blog.index') }}" method="GET">
                <label for="category" class="mr-2">Filter by Category:</label>
                <select name="category" id="category" class=" border border-gray-300 rounded px-2 py-1"
                    style="width:100px">
                    <option value="">All</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <x-primary-button>
                    Filter
                </x-primary-button>
            </form>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('blog.show', $post->id) }}">
                        <img class="rounded-t-lg" src="{{ asset('storage/' . Str::after($post->cover_image, 'public/')) }}"
                            alt="Sample Image" style="height:250px;width:100%" />

                        <div class="py-5 px-4">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{$post->title}}
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 truncate-lines-2"
                                style=" display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;overflow: hidden;">
                                {{$post->content}}
                            </p>
                            <a href="{{ route('blog.show', $post->id) }}" class="text-blue-500 hover:underline">Read
                                More</a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</x-index-layout>