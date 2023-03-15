<x-layout>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit article: {{$article->title}}
        </h2>
    </header>

    <form method="POST" action="/articles/{{$article->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                value="{{$article->title}}"
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
                value="{{$article->tags}}"
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
            <img 
                class="text-left mt-6 object-fit" 
                src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" 
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
                id="content"
                class="border border-gray-200 rounded p-2 w-full"
                name="content"
                rows="10"             
            >{{$article->content}}</textarea>
            @error('content')
                <p class="text-red-500 mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Edit article
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-layout>