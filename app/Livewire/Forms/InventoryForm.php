<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\medicineInventory;
use Carbon\Carbon;
use Livewire\Attributes\On; 

class InventoryForm extends Form
{
    #[Validate('required')]
    public $medicineName = '';
 
    #[Validate('required')]
    public $qty = '';

    #[Validate('required')]
    public $expirationDate = '';
 
    public $stockStatus = '';

    


    protected $messages = [
        'medicineName.required' => 'Medicine Name is required.',
        'qty.required' => 'Quantity is required.',
        'expirationDate.required' => 'Expiration date is required.',
    ];


    public function store() 
    {
        
        
        
    }

}
