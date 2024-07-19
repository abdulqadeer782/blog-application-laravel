@if ($errors->any())
    <div class="col-span-12">
        <div class="bg-yellow-200 text-yellow-900 border-l-4 border-yellow-500 p-4 mb-4" role="alert">
            <div class="flex items-center">
                <div class="alert-icon flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 1a9 9 0 0 0-9 9c0 4.97 4.03 9 9 9s9-4.03 9-9a9 9 0 0 0-9-9zm0 16.25a7.25 7.25 0 1 1 0-14.5 7.25 7.25 0 0 1 0 14.5zm-.22-4.75a.75.75 0 1 1-1.5 0V9a.75.75 0 0 1 1.5 0v3.5zm-.38-5.25a.75.75 0 1 1 1.5 0v.5a.75.75 0 1 1-1.5 0v-.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('success'))
    <div class="col-span-12">
        <div class="bg-green-200 text-green-900 border-l-4 border-green-500 p-4 mb-4" role="alert">
            <div class="flex items-center">
                <div class="alert-icon flex-shrink-0">
                    <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 1a9 9 0 0 0-9 9c0 4.97 4.03 9 9 9s9-4.03 9-9a9 9 0 0 0-9-9zm0 16.25a7.25 7.25 0 1 1 0-14.5 7.25 7.25 0 0 1 0 14.5zm-1.25-5.25a.75.75 0 0 1 1.5 0v2.5a.75.75 0 0 1-1.5 0v-2.5zm.25-5a.75.75 0 0 1 1.5 0v.5a.75.75 0 0 1-1.5 0v-.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="col-span-12">
        <div class="bg-red-200 text-red-900 border-l-4 border-red-500 p-4 mb-4" role="alert">
            <div class="flex items-center">
                <div class="alert-icon flex-shrink-0">
                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 1a9 9 0 0 0-9 9c0 4.97 4.03 9 9 9s9-4.03 9-9a9 9 0 0 0-9-9zm0 16.25a7.25 7.25 0 1 1 0-14.5 7.25 7.25 0 0 1 0 14.5zm-1.25-5.25a.75.75 0 0 1 1.5 0v2.5a.75.75 0 0 1-1.5 0v-2.5zm.25-5a.75.75 0 0 1 1.5 0v.5a.75.75 0 0 1-1.5 0v-.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    {{ session('error') }}
                </div>
            </div>
        </div>
    </div>
@endif
