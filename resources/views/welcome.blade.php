<x-index-layout>

    <!-- recent posts -->
    <section>
        <div class="flex justify-between py-3">
            <h2 class="text-2xl">Recent Posts</h2>
            <a href="/blogs" class="text-blue-500">View All</a>
        </div>
        <div style="display:flex ; flex-wrap:wrap" class="justify-between mt-10">

            @foreach ($recentPosts as $post)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('blog.show', $post->id) }}">
                        <img class="rounded-t-lg" src="{{ asset('storage/' . Str::after($post->cover_image, 'public/')) }}"
                            alt="{{$post->title}}" style="height:250px;width:350px" />
                    </a>
                    <a href="{{ route('blog.show', $post->id) }}">
                        <div class="py-5 px-4">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{$post->title}}
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 "
                                style=" display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;overflow: hidden;">
                                {{$post->content}}
                            </p>

                            <x-primary-button>
                                Read More
                            </x-primary-button>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </section>

</x-index-layout>