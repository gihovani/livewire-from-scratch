<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public string $searchText = '';
    public ?Collection $results;
    public string $placeholder = 'type something to search';

    public function updatedSearchText($value): void
    {
        $this->reset('results');
        $this->validate();
        $this->results = Article::where('title', 'like', '%' . $value . '%')->get();
    }

    #[On('search:clear-results')]
    public function clear(): void
    {
        $this->reset('results', 'searchText');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
