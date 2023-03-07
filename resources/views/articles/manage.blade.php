<x-layout>
    <header>
        <h1
            class="text-3xl text-center font-bold my-6 uppercase"
        >
            Manage Articles
        </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless($articles->isEmpty())
            @foreach ($articles as $article)
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href="/articles/{{$article->id}}">
                        {{$article->title}}
                    </a>
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a
                        href="/articles/{{$article->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    >
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <form method="POST" action="/articles/{{$article->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    You have not published any articles
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</x-layout>