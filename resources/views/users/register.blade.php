<x-layout>
    <div class="max-w-screen-sm mx-auto px-8 py-4 my-4 bg-stone-200 rounded-md">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Register
            </h2>
            <p class="mb-4">Create an account</p>
        </header>

        <form method="POST" action="/users" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    Name
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{old('name')}}"
                />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                    >Email</label
                >
                <input
                    type="email"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{old('email')}}"
                />
                @error('email')
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
                    value="{{old('image')}}"
                />
                @error('image')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label
                    for="password"
                    class="inline-block text-lg mb-2"
                >
                    Password
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password"
                />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="password2"
                    class="inline-block text-lg mb-2"
                >
                    Confirm Password
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password_confirmation"
                />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    type="submit"
                    class="bg-sky-600 hover:bg-sky-800 text-white rounded py-2 px-4 transition-colors duration-500 easeout"
                >
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login">
                        Login
                    </a>
                </p>
            </div>
        </form>
    </div>
</x-layout>