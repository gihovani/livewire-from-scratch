<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use WithPagination;
    public bool $showOnlyPublished = false;
    public function delete(Article $article): void
    {
        $article->delete();
    }

    public function showAll(): void
    {
        $this->resetPage('articles-page');
        $this->showOnlyPublished = false;
    }

    public function showPublished(): void
    {
        $this->resetPage('articles-page');
        $this->showOnlyPublished = true;
    }

    public function render()
    {
        $query = Article::query();
        if ($this->showOnlyPublished) {
            $query->where('published', 1);
        }
        return view('livewire.article-list', [
            'articles' => $query->paginate(10, pageName: 'articles-page')
        ]);
    }
}
