<?php

namespace App\Livewire;

use App\Models\Greeting;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Collection;

class Greeter extends Component
{
    #[Validate('required|min:2')]
    public string $name = '';
    public string $greeting = '';
    public Collection $greetings;
    public string $greetingMessage = '';

    public function changeGreeting(): void
    {
        $this->reset('greetingMessage');
        $this->validate(
//            ['name' => 'required|min:2']
        );
        $this->greetingMessage = sprintf('%s, %s!', $this->greeting, $this->name);
    }

    public function updated($property, $value): void
    {
//        if ($property === 'name') {
//            $this->name = strtolower($value);
//        }
    }
    public function updatedName($value): void
    {
        $this->name = strtolower($value);
    }

    public function mount(): void
    {
        $this->greetings = Greeting::all();
    }

//    public function rules(): array
//    {
//        return [
//            'name' => 'required|min:2'
//        ];
//    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
