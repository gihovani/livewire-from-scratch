<?php

namespace App\Livewire\Forms;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form
{
    public ?Article $article;
    #[Validate('required')]
    public string $title = '';
    #[Validate('required|min:10')]
    public string $content = '';

    public function setArticle(Article $article): void
    {
        $this->title = $article->title;
        $this->content = $article->content;
        $this->article = $article;
    }

    public function store(): void
    {
        $this->validate();
        Article::create($this->only(['title', 'content']));
    }

    public function update(): void
    {
        $this->validate();
        $this->article->update($this->only(['title', 'content']));
    }
}
