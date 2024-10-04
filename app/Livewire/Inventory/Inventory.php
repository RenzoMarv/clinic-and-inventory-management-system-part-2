<?php

namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\medicineInventory;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On; 
use Carbon\Carbon;

class Inventory extends Component
{
    use LivewireAlert;


    public $medicineName = '', $qty = '', $expirationDate = '', $stockStatus = '', $description = '',$medicineForm = '';

    public $deleteSelected = '';
    public $selectedItemId;
    public $selectedItem;
    public $isUpdating = false;
    public $isViewing = false;
    public $search = '';

    protected $rules = 
    [
        'medicineName'    => 'required|regex:/^[a-zA-Z]*$/',
        'qty'    => 'required|regex:/^[0-9]*$/',
        'expirationDate'    => 'required',
        'description'    => 'required',
        'medicineForm'    => 'required',


    ];

    protected $messages = [
        'medicineName.required' => 'Medicine Name is required.',
        'qty.required' => 'Quantity is required.',
        'expirationDate.required' => 'Expiration date is required.',
        'description.required' => 'Description is required.',
        'medicineForm.required' => 'Medicine form is required.',
    ];

    protected $listeners = ['deleteConfirmed'];

    public function create()
    {
        $this->reset();
    }

    public function save()
    {
        $this->validate(); 

        if($this->qty <= 50)
        {
            $this->stockStatus = "Low";
        }
        elseif($this->qty <= '100')
        {
            $this->stockStatus = 'Medium';
        }
        else
        {
            $this->stockStatus = 'High';
        }

        medicineInventory::create([
            'medicineName' => $this->medicineName,
            'qty' => $this->qty,
            'expirationDate' => $this->expirationDate,
            'description' => $this->expirationDate,
            'expirationDate' => $this->expirationDate,
            'medicineForm' => $this->medicineForm,
            'stockStatus' => $this->stockStatus,
            'created_at' => Carbon::now()->format('m-d-Y'),
            'updated_at' => Carbon::now()->format('m-d-Y'),

        ]);
        
        $this->reset();
        $this->dispatch('closeAddModal'); 
        $this->alert('success', 'Successfully Added', [
            'position' => 'top-end',
            'timer' => 3000,
        ]);
    }

    public function edit($id)
    {
        $this->selectedItem = medicineInventory::findOrFail($id);
        $this->selectedItemId = $this->selectedItem->id;
        $this->medicineName = $this->selectedItem->medicineName;
        $this->description = $this->selectedItem->description;
        $this->medicineForm = $this->selectedItem->medicineForm;
        $this->qty = $this->selectedItem->qty;
        $this->expirationDate = $this->selectedItem->expirationDate ? $this->selectedItem->expirationDate->format('Y-m-d') : '';
        $this->isUpdating = true;
    }

    public function viewMode($id)
    {
        $this->edit($id);
        $this->isUpdating = false;
        $this->isViewing = true;
    }

    public function update()
    {
        $this->validate(); 

        if($this->qty <= 50)
        {
            $this->stockStatus = "Low";
        }
        elseif($this->qty <= '100')
        {
            $this->stockStatus = 'Medium';
        }
        else
        {
            $this->stockStatus = 'High';
        }

        if($this->selectedItemId)
        {
            $this->selectedItem->update([
                'medicineName' => $this->medicineName,
                'qty' => $this->qty,
                'expirationDate' => $this->expirationDate,
                'stockStatus' => $this->stockStatus,
                'description' => $this->description,
                'medicineForm' => $this->medicineForm,
                'created_at' => Carbon::now()->format('m-d-Y'),
                'updated_at' => Carbon::now()->format('m-d-Y'),
            ]);
        }
        $this->reset();
        $this->dispatch('closeAddModal'); 
        $this->alert('success', 'Successfully Updated!', [
            'position' => 'top-end',
            'timer' => 3000,
        ]);
    }
    

    public function delete($id)
    {
        $this->deleteSelected = $id;
        $this->dispatch('deleteInventory');
    }

    public function deleteConfirmed()
    {
        $inventory = medicineInventory::findOrFail($this->deleteSelected);

        if($inventory)
        {
            $inventory->delete();
            $this->alert('success', 'Successfully Deleted!', [
                'position' => 'top-end',
                'timer' => 3000,
            ]);
        }
    }

    public function render()
    {
        if(empty($this->search))
        {
            $medicines = medicineInventory::orderBy('created_at', 'asc')->get();
        }
        else
        {
            
            $medicines = medicineInventory::where('medicineName', 'like', '%' . $this->search . '%')->get();
        }
       
        return view('livewire.inventory.inventory', compact('medicines'))
        ->layout('layouts.main');
    }
}
