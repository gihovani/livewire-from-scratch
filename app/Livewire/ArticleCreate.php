<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use Livewire\Attributes\Title;

#[Title('Create Article')]
class ArticleCreate extends AdminComponent
{
    public ArticleForm $form;

    public function save(): void
    {
        $this->form->store();
        $this->redirect(route('articles.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
