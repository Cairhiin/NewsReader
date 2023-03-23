<x-layout>
    <div class="max-w-screen-sm mx-auto px-8 py-4 my-4 bg-stone-200 rounded-md shadow-md">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Change user settings
            </h2>
        </header>
        @if (Auth::check())
            <form method="POST" action="/users/{{Auth::id()}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2">
                        Name
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name"
                        value="{{Auth::user()->name}}"
                    />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
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
                        value="{{Auth::user()->image}}"
                    />
                    @error('image')
                        <p class="text-red-500 mt-1">{{$message}}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="mode" class="inline-block text-lg mb-2">
                        Dark Mode
                    </label>
                    <input type="radio" id="light" name="mode" value="light" @if (Auth::user()->mode == 'light') checked @endif>
                    <label for="child">Light mode</label><br>
                    <input type="radio" id="dark" name="mode" value="dark" @if (Auth::user()->mode == 'dark') checked @endif>
                    <label for="adult">Dark mode</label><br>
                    <input type="radio" id="default" name="mode" value="default" @if (Auth::user()->mode == 'default') checked @endif>
                    <label for="senior">OS preference</label>
                    @error('mode')
                        <p class="text-red-500 mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button
                        type="submit"
                        class="bg-sky-600 hover:bg-sky-800 text-white rounded py-2 px-4 transition-colors duration-500 easeout"
                    >
                        Submit
                    </button>
                </div>
            </form>
        @else
            <div>
                You are not logged in!
            </div>
        @endif
    </div>
</x-layout>