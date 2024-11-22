<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;
use Illuminate\Support\Collection;

class SearchResults extends Component
{
    #[Reactive]
    public ?Collection $results;
    #[Reactive]
    public bool $show = false;

    public function render()
    {
        return view('livewire.search-results');
    }
}
