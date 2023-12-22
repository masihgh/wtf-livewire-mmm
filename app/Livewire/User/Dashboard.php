<?php

namespace App\Livewire\User;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    /**
     * Render the component view
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.user.dashboard');
    }
}
