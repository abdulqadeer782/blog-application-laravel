<x-index-layout>
    <section>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Cover Image -->
            <img src="{{ asset('storage/' . Str::after($post->cover_image, 'public/')) }}"
                style="width:100%;height:500px" alt="Cover Image" class="w-full h-64 object-cover object-center">

            <div class="p-6">
                <h1 class="text-3xl font-bold mb-4">{{$post->title}}</h1>
                <div class="flex justify-between">
                    <p class="text-gray-600 text-sm">Written by {{$post->user->name}}</p>
                    <p class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</p>
                </div>


                <div class="mt-4 mb-5 prose">
                    {{$post->content}}
                </div>
            </div>

            <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
                <div class="max-w-2xl mx-auto px-4">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion
                            ({{count($comments)}})</h2>
                    </div>
                    <form class="mb-6" action="{{ route('blog.comment', $post->id) }}" method="POST">
                        @csrf
                        <input value="{{$post->id}}" id="post_id" name="post_id" type="hidden" />
                        <div
                            class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                            <label for="comment" class="sr-only">Your comment</label>
                            <textarea id="comment" rows="6"
                                class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                placeholder="Write a comment..." name="comment" required></textarea>
                        </div>
                        <x-primary-button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Post comment
                        </x-primary-button>
                    </form>
                    @foreach ($comments as $comment)
                        <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <p
                                    class="inline-flex items-center mr-5 text-sm text-gray-900 dark:text-white font-semibold capitalize">
                                    {{$comment->user->name}}
                                </p>
                                <p
                                    class="inline-flex items-center mr-5 text-sm text-gray-900 dark:text-white font-semibold">
                                    {{$comment->created_at->diffForHumans()}}
                                </p>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">{{$comment->comment}}</p>
                        </article>
                    @endforeach

                </div>
            </section>
    </section>
</x-index-layout>