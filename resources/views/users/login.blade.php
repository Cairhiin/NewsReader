<x-layout>
    <div class="max-w-screen-sm mx-auto px-8 py-4 my-4 bg-stone-200 rounded-md">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Login
            </h2>
            <p class="mb-4">Log into your account</p>
        </header>

        <form method="POST" action="/users/authenticate">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-xl mb-2 font-bold dark:text-slate-400"
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
                <label
                    for="password"
                    class="inline-block text-xl mb-2 font-bold dark:text-slate-400"
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
                <x-button
                    type="submit"
                    class="bg-sky-600 hover:bg-sky-800"
                >
                <i class="fa-solid fa-arrow-right-to-bracket pr-2"></i> Login
                </x-button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register">
                        Register
                    </a>
                </p>
            </div>
        </form>
    </div>
</x-layout>