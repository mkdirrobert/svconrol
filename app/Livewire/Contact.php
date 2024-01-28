<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Contact extends Component
{
    public ?string $locale = null;

    public function mount()
    {
        $this->changeLocale('de');
    }

    public function render()
    {
        return view('livewire.contact');
    }

    public function changeLocale($locale)
    {
        $this->locale = $locale;
        App::setLocale($this->locale);
    }
}
