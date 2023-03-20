<x-layout>
    <div class="max-w-screen-sm mx-auto px-8 py-4 my-4 bg-stone-200 rounded-md shadow-md">
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
                    class="inline-block text-lg mb-2"
                    >Title</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    placeholder="Title"
                    value="{{old('title')}}"
                />
                @error('title')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2" for="category" class="inline-block text-lg mb-2">
                    Category
                </label>
                <select name="category_id" id="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
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
                    value="{{old('tags')}}"
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
                    value="{{old('image')}}"
                />
                @error('image')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="caption"
                    class="inline-block text-lg mb-2"
                    >Caption</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
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
                    class="inline-block text-lg mb-2"
                >
                    Content
                </label>
                <textarea
                    id="content"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="content"
                    rows="10"
                    placeholder="Article main content"              
                >{{old('content')}}</textarea>
                @error('content')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="bg-sky-600 hover:bg-sky-800 text-white rounded py-2 px-4 transition-colors duration-500 easeout"
                >
                    Add article
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
</x-layout>