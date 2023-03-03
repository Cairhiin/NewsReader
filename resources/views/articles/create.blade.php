<x-layout>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Add a new article
        </h2>
    </header>

    <form method="POST" action="/articles">
        @csrf
        <div class="mb-6">
            <label
                for="title"
                class="inline-block text-lg mb-2"
                >Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
            />
            @error('title')
                <p class="text-red-500 mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                placeholder="Example: sport, politics, etc"
            />
            @error('tags')
                <p class="text-red-500 mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="image" class="inline-block text-lg mb-2">
                Image
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="image"
            />
            @error('file')
                <p class="text-red-500 mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="content"
                class="inline-block text-lg mb-2"
            >
                Content
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="content"
                rows="10"
                placeholder="Article main content"
            ></textarea>
            @error('content')
                <p class="text-red-500 mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Add article
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-layout>