<x-layout>
    <div class="max-w-screen-sm mx-auto px-8 py-4 my-4 bg-stone-200 dark:bg-gray-800 rounded-md shadow-md">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Add a new article
            </h2>
        </header>

        <form method="POST" action="/articles" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label
                    for="title"
                    class="inline-block text-xl mb-2 font-bold dark:text-slate-400"
                    >Title</label
                >
                <input
                    type="text"
                    class="border border-gray-200 dark:bg-gray-700 dark:border-gray-900 placeholder:dark:text-slate-400 rounded p-2 w-full"
                    name="title"
                    placeholder="Title"
                    value="{{old('title')}}"
                />
                @error('title')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2" for="category" class="inline-block text-xl mb-2 font-bold dark:text-slate-400">
                    Category
                </label>
                <select class="p-2 rounded dark:bg-gray-700 dark:border-gray-900 placeholder:dark:text-slate-400" name="category_id" id="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-xl mb-2 font-bold dark:text-slate-400">
                    Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full dark:bg-gray-700 dark:border-gray-900 placeholder:dark:text-slate-400"
                    name="tags"
                    placeholder="Example: sport, politics, etc"
                    value="{{old('tags')}}"
                />
                @error('tags')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-xl mb-2 font-bold dark:text-slate-400">
                    Image
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full dark:bg-gray-700 dark:border-gray-900 placeholder:dark:text-slate-400"
                    name="image"
                    value="{{old('image')}}"
                />
                @error('image')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="caption"
                    class="inline-block text-xl mb-2 font-bold dark:text-slate-400"
                    >Caption</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full dark:bg-gray-700 dark:border-gray-900 placeholder:dark:text-slate-400"
                    name="caption"
                    value="{{old('caption')}}"
                />
                @error('caption')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="content"
                    class="inline-block text-xl mb-2 font-bold dark:text-slate-400"
                >
                    Content
                </label>
                <textarea
                    id="content"
                    class="border border-gray-200 rounded p-2 w-full dark:bg-gray-700 dark:border-gray-900 placeholder:dark:text-slate-400"
                    name="content"
                    rows="10"
                    placeholder="Article main content"              
                >{{old('content')}}</textarea>
                @error('content')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <x-button
                    class="bg-sky-600 hover:bg-sky-800 mr-4"
                >
                    Add article
                </x-button>
                <x-button class="bg-red-600 hover:bg-amber-600">
                    <a href="/"> Back </a>
                </x-button>
            </div>
        </form>
</x-layout>