<?php

namespace App\Livewire\UserMedicalExaminationForm;

use Livewire\Component;
use App\Livewire\Forms\MedicalExaminationForm;
use App\Models\MedicalExaminationModel;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On; 

class UserMedicalExaminationForm extends Component
{

    use LivewireAlert;
    public MedicalExaminationForm $MedicalExaminationForm;

    public function render()
    {
        return view('livewire.user-medical-examination-form.user-medical-examination-form')->layout('layouts.main');
    }

    public function save()
    {
        $this->MedicalExaminationForm->store();
        $this->dispatch('closeAddModal'); 
        $this->alert('success', 'Successfully Added', [
            'position' => 'top-end',
            'timer' => 3000,
        ]);
    }

    
    
}

class CreatePost extends Component
{

    #[Validate('required')] 
    public $docuControl = '';
 
    public function save()
    {

        $this->validate();

        Post::create([
            'docuControl' => $this->docuControl
        ]);
 
        $this->redirect('/posts');
    }
 
    public function render()
    {
        return view('livewire.create-post');
    }
}
