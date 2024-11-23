<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy]
class ArticlePublishedCount extends Component
{
    public int $count = 0;
    public string $placeholderText = '';

    public function mount(): void
    {
        sleep(1);
        $this->count = Article::where('published', 1)->count();
    }

    public function placeholder()
    {
        return view('livewire.placeholder', ['message' => $this->placeholderText]);
    }

    public function render()
    {
        return view('livewire.article-published-count');
    }
}
