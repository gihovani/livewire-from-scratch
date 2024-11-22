<div class="m-auto w-9/12">
    @if($articles && $articles->count() > 0)
        @foreach($articles as $article)
            <div class="mt-5 p-3" wire:key="{{$article->id}}">
                <h3 class="text-2xl text-blue-500 mb-3 hover:text-blue-700">
                    <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                </h3>
                <p> {{str($article->content)->words(30)}}</p>
            </div>
        @endforeach
    @else
        <p>No results found.</p>
    @endif
</div>