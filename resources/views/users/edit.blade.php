<x-layout>
    <div class="max-w-screen-sm mx-auto px-8 py-4 my-4 bg-stone-200 dark:bg-gray-800 rounded-md shadow-md">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1 dark:text-slate-200">
                Change user settings
            </h2>
        </header>
        @if (Auth::check())
            <form class="dark:text-slate-200" method="POST" action="/users/{{Auth::id()}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="name" class="inline-block text-xl mb-2 font-bold dark:text-slate-400">
                        Name
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 dark:bg-gray-700 dark:border-gray-900 placeholder:dark:text-slate-400 rounded p-2 w-full"
                        name="name"
                        value="{{$user->name}}"
                    />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="image" class="inline-block text-xl mb-2 font-bold dark:text-slate-400">
                        Image
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 dark:bg-gray-700 dark:border-gray-900 placeholder:dark:text-slate-400 rounded p-2 w-full"
                        name="image"
                        value="{{$user->image}}"
                    />
                    @error('image')
                        <p class="text-red-500 mt-1">{{$message}}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="mode" class="inline-block text-xl mb-2 font-bold dark:text-slate-400">
                        Dark Mode
                    </label>
                    <div>
                        <input class="my-2 mr-2" type="radio" id="light" name="mode" value="light" @if ($user->mode == 'light') checked @endif>
                        <label for="child">Light mode</label><br>
                        <input class="my-2 mr-2" type="radio" id="dark" name="mode" value="dark" @if ($user->mode == 'dark') checked @endif>
                        <label for="adult">Dark mode</label><br>
                        <input class="my-2 mr-2" type="radio" id="default" name="mode" value="default" @if ($user->mode == 'default') checked @endif>
                        <label for="senior">OS preference</label>
                    </div>
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