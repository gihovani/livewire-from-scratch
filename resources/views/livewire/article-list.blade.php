<div class="m-auto w-9/12 mb-4">
    <div class="mb-3">
        <a
            href="/dashboard/articles/create"
            class="text-gray-200 p-2 bg-indigo-700 hover:bg-indigo-900 rounded-sm"
            wire:navigate>
            Create Article
        </a>
    </div>
    <table>
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
        <tr>
            <td class="px-6 py-3">Title</td>
            <td class="px-6 py-3">#</td>
        </tr>
        </thead>
        <tbody>
        @if($articles && $articles->count() > 0)
            @foreach($articles as $article)
                <tr class="border-b bg-gray-800 border-gray-700" wire:key="{{$article->id}}">
                    <td class="px-6 py-3">
                        {{$article->title}}
                    </td>
                    <td class="px-6 py-3">
                        <a class="text-gray-200 p-2 mr-2 bg-indigo-700 hover:bg-indigo-900 rounded-md"
                           href="/dashboard/articles/{{$article->id}}/edit"
                           wire:navigate>
                            Edit
                        </a>
                        <button class="text-gray-200 p-2 bg-red-700 hover:bg-red-900 rounded-md"
                                wire:click="delete({{$article->id}})"
                                wire:confirm="Are you sure delete this article [id: {{$article->id}}]?">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="2">No results found.</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
