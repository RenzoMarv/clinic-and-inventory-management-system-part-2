<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\MedicalExaminationModel;
use Carbon\Carbon;
use Livewire\Attributes\On; 

class MedicalExaminationForm extends Form
{
    public $docuControl = '';

    #[Validate('required')]
    public $lastName = '';

    #[Validate('required')]
    public $firstName = '';

    public $middleName = '';

    #[Validate('required')]
    public $gender = '';

    #[Validate('required|digits:11')]
    public $cellphoneNo = '';

    #[Validate('required')]
    public $address = '';

    #[Validate('required')]
    public $date = '';

    #[Validate('required')]
    public $birthday = '';

    #[Validate('required|digits:2')]
    public $age = '';

    #[Validate('required')]
    public $civilStatus = '';

    #[Validate('required')]
    public $emailAddress = '';

    #[Validate('required')]
    public $courseYearDesignation = '';

    #[Validate('required')]
    public $purpose = '';

    public $pastMedHistory = '';

    public $familyHistory = '';

    public $occupationHistory = '';

    protected $messages = [
        'lastName.required' => 'Lastname is required.',
        'firstName.required' => 'FirstName is required.',
        'middleName.required' => 'MiddleName is required.',
        'gender.required' => 'Gender is required.',
        'cellphoneNo.required' => 'CP Number is required.',
        'cellphoneNo.digits' => 'CP Number must be 11 digits.',
        'address.required' => 'Address is required.',
        'date.required' => 'Date is required.',
        'birthday.required' => 'Birthday is required.',
        'age.required' => 'Age is required.',
        'age.digits' => 'Age must be 2 digits only.',
        'civilStatus.required' => 'Civil Status is required.',
        'emailAddress.required' => 'Email Address is required.',
        'courseYearDesignation.required' => 'This field is required.',
        'purpose.required' => 'Purpose is required.',
    ];

    // public function mount()
    // {
    //     $this->generateNumber(); // Generate a number when the component is initialized
    // }

    // public function generateNumber()
    // {
    //     $this->docuControl = rand(1000, 9999); // Adjust range as needed
    //     dd($this->docuControl);
    // }

    public function store(){

        $this->validate();

        MedicalExaminationModel::create([
            'docuControl' => $this->docuControl,
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'middleName' => $this->middleName,
            'gender' => $this->gender,
            'cellphoneNo' => $this->cellphoneNo,
            'address' => $this->address,
            'date' => $this->date,
            'birthday' => $this->birthday,
            'age' => $this->age,
            'civilStatus' => $this->civilStatus,
            'emailAddress' => $this->emailAddress,
            'courseYearDesignation' => $this->courseYearDesignation,
            'purpose' => $this->purpose,
            'pastMedHistory' => $this->pastMedHistory,
            'familyHistory' => $this->familyHistory,
            'occupationHistory' => $this->occupationHistory,
            'created_at' => Carbon::now()->format('m-d-Y'),
            'updated_at' => Carbon::now()->format('m-d-Y'),

        ]);
        
        $this->reset();

        
    }
}
