<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;

use App\Models\medicineInventory;

class AdminDashboard extends Component
{
    public function render()
    {
        $lowStocks = medicineInventory::where('stockStatus','Low')->get();

        return view('livewire.admin-dashboard.admin-dashboard',compact('lowStocks'))->layout('layouts.main');
    }
}
