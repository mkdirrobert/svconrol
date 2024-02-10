<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Agb extends Component
{
    public ?string $locale = null;

    public function mount()
    {
        $this->changeLocale('de');
    }

    public function render()
    {
        return view('livewire.agb');
    }

    public function changeLocale($locale)
    {
        $this->locale = $locale;
        App::setLocale($this->locale);
    }
}
