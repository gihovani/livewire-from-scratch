<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[Title('Create Article')]
class ArticleEdit extends AdminComponent
{
    public ArticleForm $form;
    #[Validate('required')]
    public string $title = '';
    #[Validate('required|min:10')]
    public string $content = '';

    public function save(): void
    {
        $this->form->update();
        $this->redirect(route('articles.index'), navigate: true);
    }

    public function mount(Article $article): void
    {
        $this->form->setArticle($article);
    }

    public function render()
    {
        return view('livewire.article-edit');
    }
}
