<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white text-black py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">Blog Application</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1">
        <!-- Hero Section -->
        <section class="bg-gray-700 text-white py-12">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold">Welcome to Our Blog</h1>
                <p class="mt-4 text-xl">Stay updated with the latest news and articles</p>
            </div>
        </section>

        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
                <!-- Main Content -->
                <div class="w-full lg:w-3/4 px-4">
                    <!-- Latest Posts -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold mb-4">Latest Posts</h2>
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <article class="mb-4">
                                <h3 class="text-xl font-semibold"><a href="#" class="text-blue-600 hover:underline">Post
                                        Title 1</a></h3>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque nisl eros...</p>
                            </article>
                            <article class="mb-4">
                                <h3 class="text-xl font-semibold"><a href="#" class="text-blue-600 hover:underline">Post
                                        Title 2</a></h3>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque nisl eros...</p>
                            </article>
                            <article class="mb-4">
                                <h3 class="text-xl font-semibold"><a href="#" class="text-blue-600 hover:underline">Post
                                        Title 3</a></h3>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque nisl eros...</p>
                            </article>
                            <a href="#" class="text-blue-600 hover:underline">View All Posts</a>
                        </div>
                    </section>
                </div>

                <!-- Sidebar -->
                <div class="w-full lg:w-1/4 px-4">
                    <!-- Recent Posts -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold mb-4">Recent Posts</h2>
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex flex-wrap -mx-2">
                                <div class="w-full md:w-1/3 px-2 mb-4">
                                    <h3 class="text-lg font-semibold"><a href="#"
                                            class="text-blue-600 hover:underline">Recent Post 1</a></h3>
                                    <p class="text-gray-600 text-sm">March 25, 2024</p>
                                </div>
                                <div class="w-full md:w-1/3 px-2 mb-4">
                                    <h3 class="text-lg font-semibold"><a href="#"
                                            class="text-blue-600 hover:underline">Recent Post 2</a></h3>
                                    <p class="text-gray-600 text-sm">March 24, 2024</p>
                                </div>
                                <div class="w-full md:w-1/3 px-2 mb-4">
                                    <h3 class="text-lg font-semibold"><a href="#"
                                            class="text-blue-600 hover:underline">Recent Post 3</a></h3>
                                    <p class="text-gray-600 text-sm">March 23, 2024</p>
                                </div>
                                <div class="w-full md:w-1/3 px-2 mb-4">
                                    <h3 class="text-lg font-semibold"><a href="#"
                                            class="text-blue-600 hover:underline">Recent Post 4</a></h3>
                                    <p class="text-gray-600 text-sm">March 22, 2024</p>
                                </div>
                                <div class="w-full md:w-1/3 px-2 mb-4">
                                    <h3 class="text-lg font-semibold"><a href="#"
                                            class="text-blue-600 hover:underline">Recent Post 5</a></h3>
                                    <p class="text-gray-600 text-sm">March 21, 2024</p>
                                </div>
                                <div class="w-full md:w-1/3 px-2 mb-4">
                                    <h3 class="text-lg font-semibold"><a href="#"
                                            class="text-blue-600 hover:underline">Recent Post 6</a></h3>
                                    <p class="text-gray-600 text-sm">March 20, 2024</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-700 text-white py-4">
        <div class="container mx-auto px-4">
            <p class="text-center">&copy; 2024 My Blog. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>