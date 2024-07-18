<x-index-layout>

    <!-- recent posts -->
    <section>
        <div class="flex justify-between py-3">
            <h2 class="text-2xl">Recent Posts</h2>
            <a href="/blogs" class="text-blue-500">View All</a>
        </div>
        <div class="flex flex-wrap justify-between mt-10">


            @foreach ($recentPosts as $post)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('storage/' . Str::after($post->cover_image, 'public/')) }}"
                            alt="{{$post->title}}" style="height:250px;width:350px" />
                    </a>
                    <div class="py-5 px-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{$post->title}}
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{$post->content}}
                        </p>

                        <x-primary-button>
                            Read More
                        </x-primary-button>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

</x-index-layout>