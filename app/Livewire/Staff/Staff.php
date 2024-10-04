<?php

namespace App\Livewire\Staff;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Hash;

class Staff extends Component
{
    use LivewireAlert;

    public $firstName;
    public $lastName;
    public $middleName;
    public $nameExt;
    public $email;
    public $password;

    public $selectedStaff;
    public $editMode = false;
    public $isViewing = false;
    public $deleteSelected;

    protected $listeners = ['deleteConfirmed'];

    protected $rules = 
    [
        'firstName'    => 'required',
        'lastName'    => 'required',
        'middleName'    => 'nullable',
        'nameExt'    => 'nullable',
        'email'    => 'required|email|unique:users',
        'password'    => 'required',

    ];

    public function create()
    {
        $this->reset();
    }

    public function store()
    {
        $this->validate(); 

        User::create([
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'middleName' => $this->middleName,
            'nameExt' => $this->nameExt,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ])->assignRole('staff');

        $this->reset();
        $this->dispatch('closeStaff'); 
        $this->alert('success', 'Successfully Created', [
            'position' => 'top-end',
            'timer' => 3000,
        ]);

    }

    public function edit($id)
    {
        $this->selectedStaff = User::findorFail($id);

        $this->firstName = $this->selectedStaff->firstName;
        $this->lastName = $this->selectedStaff->lastName;
        $this->middleName = $this->selectedStaff->middleName;
        $this->nameExt = $this->selectedStaff->nameExt;
        $this->email = $this->selectedStaff->email;
        $this->editMode = true;

    }

    public function update()
    {
   
        $this->selectedStaff->update([
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'middleName' => $this->middleName,
            'nameExt' => $this->nameExt,
            'email' => $this->email,
        ]);
        $this->reset();
        $this->dispatch('closeStaff'); 
        $this->alert('success', 'Successfully Updated!', [
            'position' => 'top-end',
            'timer' => 3000,
        ]);
    }

    public function view($id)
    {
        $this->edit($id);
        $this->editMode = false;
        $this->isViewing = true;
    }

    public function delete($id)
    {
        $this->deleteSelected = $id;
        $this->dispatch('deleteStaff');
    }

    public function deleteConfirmed()
    {
        $staff = User::findOrFail($this->deleteSelected);

        if($staff)
        {
            $staff->delete();
            $this->alert('success', 'Successfully Deleted!', [
                'position' => 'top-end',
                'timer' => 3000,
            ]);
        }
    }

  

    public function render()
    {
        $staffs = User::role('staff')->orderBy('lastName', 'asc')->get();
        return view('livewire.staff.staff', compact('staffs'))
        ->layout('layouts.main');;
    }
}
