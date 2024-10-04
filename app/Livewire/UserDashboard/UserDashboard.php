<?php

namespace App\Livewire\UserDashboard;

use Livewire\Component;

class UserDashboard extends Component
{
    public function render()
    {
        return view('livewire.user-dashboard.user-dashboard')
        ->layout('layouts.main');
    }
}
