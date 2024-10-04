<?php

namespace App\Livewire\UserMedicalConsultationForm;

use Livewire\Component;
use App\Models\User;
use App\Models\MedicalConsultation;
use App\Models\MedicalConsultationPart1;
use App\Models\MedicalConsultationPart2;
use App\Models\MedicalConsultationPart3;
use App\Models\MedicalConsultationPart4;
use App\Models\MedicalConsultationPart5;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UserMedicalConsultationForm extends Component
{

    use WithFileUploads;
    use LivewireAlert;

    // for part 1
    public $courseDesination, $date, $surname, $firstName, $middleName, $nameExt, $birthDate, $sex, $age, $address, $nationality, $religion, $cellphoneNumber, $email;

    // for part 2
    public $fatherName, $fatherDOB, $fatherOccupation, $motherName, $motherDOB, $motherOccupation, $personToBeNotified, $part2CellphoneNumber, $canotBeReachName, $canotBeReachCellphoneNumber, $cannotBeReachRelationToThePatient;

    // for part 3
    public $bloodType,$weight,$height,$food,$foodSpecify,$medicine,$medicineSpecify,$part3Others,$part3OthersSpecify,$historyOfAsthma;

    // for part 4
    public $asthma,$bronchitis,$chickenPox,$epilepsy,$gastritis,$heartDisease,$hypertension,$measles,$muscleSpasm,$pneumonia,$skinAllergy,$tonsilitis,$tuberculosis,$uti,$part4Others,$part4OthersSpecify;

    // for part 5
    public $blindOrVisuallyImpaired,$autism,$orthopedicallyChallenged,$chronicIllness,$part5CourseDesination,$deafOrMute,$congenitalDefects,$communicationDisorder,$a,$bYes,$bNo,$bDateOfOperation,$bTypeOfOperation,$bHospital,$cYes,$cNo,$cHospital,$cAttendingPhysician,$cDiagnosis,$signature,$ParentOrGuardianSignature;

    // validation if user has existing data
    public $hasMedicalConsultation = false;
    public $data;
    public $image1;
    public $image2;


    protected $rules = 
    [
        'courseDesination' => 'required|string',
        'date' => 'required|date',
        'surname' => 'required|string',
        'firstName' => 'required|string',
        'middleName' => 'nullable|string',
        'nameExt' => 'nullable|string',
        'birthDate' => 'required|date',
        'sex' => 'required|string',
        'age' => 'required|numeric',
        'address' => 'required|string',
        'nationality' => 'required|string',
        'religion' => 'nullable|string',
        'cellphoneNumber' => 'required|digits:11',
        'email' => 'required|email',

        'fatherName' => 'required|string',
        'fatherDOB' => 'required|date',
        'fatherOccupation' => 'required|string',
        'motherName' => 'required|string',
        'motherDOB' => 'required|date',
        'motherOccupation' => 'required|string',
        'personToBeNotified' => 'required|string',
        'part2CellphoneNumber' => 'required|digits:11',
        'canotBeReachName' => 'required|string',
        'canotBeReachCellphoneNumber' => 'required|digits:11',
        'cannotBeReachRelationToThePatient' => 'required|string',

        'bloodType' => 'required|string',
        'weight' => 'required',
        'height' => 'required',
        'food' => 'nullable|string',
        'foodSpecify' => 'nullable|max:1000',
        'medicine' => 'nullable|string',
        'medicineSpecify' => 'nullable|string',
        'part3Others' => 'nullable|max:1000',
        'part3OthersSpecify' => 'nullable|max:1000',
        'historyOfAsthma' => 'required|string',

        'asthma' => 'nullable',
        'bronchitis' => 'nullable',
        'chickenPox' => 'nullable',
        'epilepsy' => 'nullable',
        'gastritis' => 'nullable',
        'heartDisease' => 'nullable',
        'hypertension' => 'nullable',
        'measles' => 'nullable',
        'muscleSpasm' => 'nullable',
        'pneumonia' => 'nullable',
        'skinAllergy' => 'nullable',
        'tonsilitis' => 'nullable',
        'tuberculosis' => 'nullable',
        'uti' => 'nullable',
        'part4Others' => 'nullable',
        'part4OthersSpecify' => 'nullable',

        'blindOrVisuallyImpaired' => 'nullable',
        'autism' => 'nullable',
        'orthopedicallyChallenged' => 'nullable',
        'chronicIllness' => 'nullable',
        'part5CourseDesination' => 'nullable',
        'deafOrMute' => 'nullable',
        'congenitalDefects' => 'nullable',
        'communicationDisorder' => 'nullable',
        'a' => 'nullable',
        'bYes' => 'nullable',
        'bNo' => 'nullable',
        'bDateOfOperation' => 'nullable',
        'bTypeOfOperation' => 'nullable',
        'bHospital' => 'nullable',
        'cYes' => 'nullable',
        'cNo' => 'nullable',
        'cHospital' => 'nullable',
        'cAttendingPhysician' => 'nullable',
        'cDiagnosis' => 'nullable',
    ];

    protected $listeners = ['deleteConfirmed'];

    public function store()
    {
        // $validatedDate = $this->validate();
        $userId = Auth::id();

       $part1 = MedicalConsultationPart1::create([
        'user_id' => $userId,
        'courseDesination' => $this->courseDesination,
        'date' => $this->date,
        'surname' => $this->surname,
        'firstName' => $this->firstName,
        'middleName' => $this->middleName,
        'nameExt' => $this->nameExt,
        'birthDate' => $this->birthDate,
        'sex' => $this->sex,
        'age' => $this->age,
        'address' => $this->address,
        'nationality' => $this->nationality,
        'religion' => $this->religion,
        'cellphoneNumber' => $this->cellphoneNumber,
        'email' => $this->email,
       ]);
      

       $part2 = MedicalConsultationPart2::create([
        'user_id' => $userId,
        'fatherName' => $this->fatherName,
        'fatherDOB' => $this->fatherDOB,
        'fatherOccupation' => $this->fatherOccupation,
        'motherName' => $this->motherName,
        'motherDOB' => $this->motherDOB,
        'motherOccupation' => $this->motherOccupation,
        'personToBeNotified' => $this->personToBeNotified,
        'part2CellphoneNumber' => $this->part2CellphoneNumber,
        'canotBeReachName' => $this->canotBeReachName,
        'canotBeReachCellphoneNumber' => $this->canotBeReachCellphoneNumber,
        'cannotBeReachRelationToThePatient' => $this->cannotBeReachRelationToThePatient,
       ]);


       $part3 = MedicalConsultationPart3::create([
        'user_id' => $userId,
        'bloodType' =>$this->bloodType,
        'weight' =>$this->weight,
        'height' =>$this->height,
        'food' =>$this->food,
        'foodSpecify' =>$this->foodSpecify,
        'medicine' =>$this->medicine,
        'medicineSpecify' =>$this->medicineSpecify,
        'part3Others' =>$this->part3Others,
        'part3OthersSpecify' =>$this->part3OthersSpecify,
        'historyOfAsthma' =>$this->historyOfAsthma,
       ]);
     

       $part4 = MedicalConsultationPart4::create([
        'user_id' => $userId,
        'asthma' => $this->asthma,
        'bronchitis' => $this->bronchitis,
        'chickenPox' => $this->chickenPox,
        'epilepsy' => $this->epilepsy,
        'gastritis' => $this->gastritis,
        'heartDisease' => $this->heartDisease,
        'hypertension' => $this->hypertension,
        'measles' => $this->measles,
        'muscleSpasm' => $this->muscleSpasm,
        'pneumonia' => $this->pneumonia,
        'skinAllergy' => $this->skinAllergy,
        'tonsilitis' => $this->tonsilitis,
        'tuberculosis' => $this->tuberculosis,
        'uti' => $this->uti,
        'part4Others' => $this->part4Others,
        'part4OthersSpecify' => $this->part4OthersSpecify,
       ]);
       

       $part5 = MedicalConsultationPart5::create([
        'user_id' => $userId,
        'blindOrVisuallyImpaired' => $this->blindOrVisuallyImpaired,
        'autism' => $this->autism,
        'orthopedicallyChallenged' => $this->orthopedicallyChallenged,
        'chronicIllness' => $this->chronicIllness,
        'part5CourseDesination' => $this->part5CourseDesination,
        'deafOrMute' => $this->deafOrMute,
        'congenitalDefects' => $this->congenitalDefects,
        'communicationDisorder' => $this->communicationDisorder,
        'a' => $this->a,
        'bYes' => $this->bYes,
        'bNo' => $this->bNo,
        'bDateOfOperation' => $this->bDateOfOperation,
        'bTypeOfOperation' => $this->bTypeOfOperation,
        'bHospital' => $this->bHospital,
        'cYes' => $this->cYes,
        'cNo' => $this->cNo,
        'cHospital' => $this->cHospital,
        'cAttendingPhysician' => $this->cAttendingPhysician,
        'cDiagnosis' => $this->cDiagnosis,
    
        
       ]);
       
       $this->alert('success', 'Successfully Added Your Data', [
        'position' => 'top-end',
        'timer' => 3000,
        ]);
    
    }

    public function edit()
    {
        $userId = Auth::id();
        $userData = User::with(['medicalConsultation1','medicalConsultation2','medicalConsultation3','medicalConsultation4','medicalConsultation5'])->findOrFail($userId);
        $this->data = $userData;
            
            $this->courseDesination = $userData->medicalConsultation1->courseDesination;
            $this->date = $userData->medicalConsultation1->date;
            $this->surname = $userData->medicalConsultation1->surname;
            $this->firstName = $userData->medicalConsultation1->firstName;
            $this->middleName = $userData->medicalConsultation1->middleName;
            $this->nameExt = $userData->medicalConsultation1->nameExt;
            $this->birthDate = $userData->medicalConsultation1->birthDate;
            $this->sex = $userData->medicalConsultation1->sex;
            $this->age = $userData->medicalConsultation1->age;
            $this->address = $userData->medicalConsultation1->address;
            $this->nationality = $userData->medicalConsultation1->nationality;
            $this->religion = $userData->medicalConsultation1->religion;
            $this->cellphoneNumber = $userData->medicalConsultation1->cellphoneNumber;
            $this->email = $userData->medicalConsultation1->email;

            $this->fatherName = $userData->medicalConsultation2->fatherName;
            $this->fatherDOB = $userData->medicalConsultation2->fatherDOB;
            $this->fatherOccupation = $userData->medicalConsultation2->fatherOccupation;
            $this->motherName = $userData->medicalConsultation2->motherName;
            $this->motherDOB = $userData->medicalConsultation2->motherDOB;
            $this->motherOccupation = $userData->medicalConsultation2->motherOccupation;
            $this->personToBeNotified = $userData->medicalConsultation2->personToBeNotified;
            $this->part2CellphoneNumber = $userData->medicalConsultation2->part2CellphoneNumber;
            $this->canotBeReachName = $userData->medicalConsultation2->canotBeReachName;
            $this->canotBeReachCellphoneNumber = $userData->medicalConsultation2->canotBeReachCellphoneNumber;
            $this->cannotBeReachRelationToThePatient = $userData->medicalConsultation2->cannotBeReachRelationToThePatient;

            $this->bloodType = $userData->medicalConsultation3->bloodType;
            $this->weight = $userData->medicalConsultation3->weight;
            $this->height = $userData->medicalConsultation3->height;
            $this->food = $userData->medicalConsultation3->food;
            $this->foodSpecify = $userData->medicalConsultation3->foodSpecify;
            $this->medicine = $userData->medicalConsultation3->medicine;
            $this->medicineSpecify = $userData->medicalConsultation3->medicineSpecify;
            $this->part3Others = $userData->medicalConsultation3->part3Others;
            $this->part3OthersSpecify = $userData->medicalConsultation3->part3OthersSpecify;
            $this->historyOfAsthma = $userData->medicalConsultation3->historyOfAsthma;

            $this->asthma = $userData->medicalConsultation4->asthma;
            $this->bronchitis = $userData->medicalConsultation4->bronchitis;
            $this->chickenPox = $userData->medicalConsultation4->chickenPox;
            $this->epilepsy = $userData->medicalConsultation4->epilepsy;
            $this->gastritis = $userData->medicalConsultation4->gastritis;
            $this->heartDisease = $userData->medicalConsultation4->heartDisease;
            $this->hypertension = $userData->medicalConsultation4->hypertension;
            $this->measles = $userData->medicalConsultation4->measles;
            $this->muscleSpasm = $userData->medicalConsultation4->muscleSpasm;
            $this->pneumonia = $userData->medicalConsultation4->pneumonia;
            $this->skinAllergy = $userData->medicalConsultation4->skinAllergy;
            $this->tonsilitis = $userData->medicalConsultation4->tonsilitis;
            $this->tuberculosis = $userData->medicalConsultation4->tuberculosis;
            $this->uti = $userData->medicalConsultation4->uti;
            $this->part4Others = $userData->medicalConsultation4->part4Others;
            $this->part4OthersSpecify = $userData->medicalConsultation4->part4OthersSpecify;

            $this->blindOrVisuallyImpaired = $userData->medicalConsultation5->blindOrVisuallyImpaired;
            $this->autism = $userData->medicalConsultation5->autism;
            $this->orthopedicallyChallenged = $userData->medicalConsultation5->orthopedicallyChallenged;
            $this->chronicIllness = $userData->medicalConsultation5->chronicIllness;
            $this->part5CourseDesination = $userData->medicalConsultation5->part5CourseDesination;
            $this->deafOrMute = $userData->medicalConsultation5->deafOrMute;
            $this->congenitalDefects = $userData->medicalConsultation5->congenitalDefects;
            $this->communicationDisorder = $userData->medicalConsultation5->communicationDisorder;
            $this->a = $userData->medicalConsultation5->a;
            $this->bYes = $userData->medicalConsultation5->bYes;
            $this->bNo = $userData->medicalConsultation5->bNo;
            $this->bDateOfOperation = $userData->medicalConsultation5->bDateOfOperation;
            $this->bTypeOfOperation = $userData->medicalConsultation5->bTypeOfOperation;
            $this->bHospital = $userData->medicalConsultation5->bHospital;
            $this->cYes = $userData->medicalConsultation5->cYes;
            $this->cNo = $userData->medicalConsultation5->cNo;
            $this->cHospital = $userData->medicalConsultation5->cHospital;
            $this->cAttendingPhysician = $userData->medicalConsultation5->cAttendingPhysician;
            $this->cDiagnosis = $userData->medicalConsultation5->cDiagnosis;
            $this->signature = Storage::get('signatures' .$userData->medicalConsultation5->signature) ;
            $this->ParentOrGuardianSignature = Storage::get('signatures' . $userData->medicalConsultation5->ParentOrGuardianSignature);
    }

    public function update()
    {
        $validatedDate = $this->validate();

        $this->data->medicalConsultation1->update([
            'courseDesination' => $this->courseDesination,
            'date' => $this->date,
            'surname' => $this->surname,
            'firstName' => $this->firstName,
            'middleName' => $this->middleName,
            'nameExt' => $this->nameExt,
            'birthDate' => $this->birthDate,
            'sex' => $this->sex,
            'age' => $this->age,
            'address' => $this->address,
            'nationality' => $this->nationality,
            'religion' => $this->religion,
            'cellphoneNumber' => $this->cellphoneNumber,
            'email' => $this->email,
        ]);

        $this->data->medicalConsultation2->update([
            'fatherName' => $this->fatherName,
            'fatherDOB' => $this->fatherDOB,
            'fatherOccupation' => $this->fatherOccupation,
            'motherName' => $this->motherName,
            'motherDOB' => $this->motherDOB,
            'motherOccupation' => $this->motherOccupation,
            'personToBeNotified' => $this->personToBeNotified,
            'part2CellphoneNumber' => $this->part2CellphoneNumber,
            'canotBeReachName' => $this->canotBeReachName,
            'canotBeReachCellphoneNumber' => $this->canotBeReachCellphoneNumber,
            'cannotBeReachRelationToThePatient' => $this->cannotBeReachRelationToThePatient,
        ]);

        $this->data->medicalConsultation3->update([
            'bloodType' => $this->bloodType,
            'weight' => $this->weight,
            'height' => $this->height,
            'food' => $this->food,
            'foodSpecify' => $this->foodSpecify,
            'medicine' => $this->medicine,
            'medicineSpecify' => $this->medicineSpecify,
            'part3Others' => $this->part3Others,
            'part3OthersSpecify' => $this->part3OthersSpecify,
            'historyOfAsthma' => $this->historyOfAsthma,
        ]);

        $this->data->medicalConsultation4->update([
            'asthma' => $this->asthma,
            'bronchitis' => $this->bronchitis,
            'chickenPox' => $this->chickenPox,
            'epilepsy' => $this->epilepsy,
            'gastritis' => $this->gastritis,
            'heartDisease' => $this->heartDisease,
            'hypertension' => $this->hypertension,
            'measles' => $this->measles,
            'muscleSpasm' => $this->muscleSpasm,
            'pneumonia' => $this->pneumonia,
            'skinAllergy' => $this->skinAllergy,
            'tonsilitis' => $this->tonsilitis,
            'tuberculosis' => $this->tuberculosis,
            'uti' => $this->uti,
            'part4Others' => $this->part4Others,
            'part4OthersSpecify' => $this->part4OthersSpecify,
        ]);

        // $this->image1 =  $this->data->medicalConsultation5->signature;
        // $this->image2 =  $this->data->medicalConsultation5->ParentOrGuardianSignature;
        
        $this->data->medicalConsultation5->update([
            'blindOrVisuallyImpaired' => $this->blindOrVisuallyImpaired,
            'autism' => $this->autism,
            'orthopedicallyChallenged' => $this->orthopedicallyChallenged,
            'chronicIllness' => $this->chronicIllness,
            'part5CourseDesination' => $this->part5CourseDesination,
            'deafOrMute' => $this->deafOrMute,
            'congenitalDefects' => $this->congenitalDefects,
            'communicationDisorder' => $this->communicationDisorder,
            'a' => $this->a,
            'bYes' => $this->bYes,
            'bNo' => $this->bNo,
            'bDateOfOperation' => $this->bDateOfOperation,
            'bTypeOfOperation' => $this->bTypeOfOperation,
            'bHospital' => $this->bHospital,
            'cYes' => $this->cYes,
            'cNo' => $this->cNo,
            'cHospital' => $this->cHospital,
            'cAttendingPhysician' => $this->cAttendingPhysician,
            'cDiagnosis' => $this->cDiagnosis,
           
            // 'signature' => $this->signature ? $this->signature->store('signatures', 'public') : $this->image1,
            // 'ParentOrGuardianSignature' => $this->ParentOrGuardianSignature  ? $this->ParentOrGuardianSignature->store('signatures', 'public') : $this->image2,

        ]);

        $this->alert('success', 'Successfully Updated Your Data', [
            'position' => 'top-end',
            'timer' => 3000,
            ]);
        

    }

    public function delete()
    {
        $this->dispatch('deleteMCF');
    }

    public function deleteConfirmed()
    {
       

        if($this->data)
        {
            $this->data->medicalConsultation1->delete();
            $this->data->medicalConsultation2->delete();
            $this->data->medicalConsultation3->delete();
            $this->data->medicalConsultation4->delete();
            $this->data->medicalConsultation5->delete();
            $this->reset();
            $this->alert('success', 'Successfully Deleted!', [
                'position' => 'top-end',
                'timer' => 3000,
            ]);
        }
    }



    public function render()
    {
        $userId = Auth::id();
        $userHasMedicalConsultation = MedicalConsultationPart1::where('user_id', $userId )->exists();
        
        if ($userHasMedicalConsultation) {
            $this->hasMedicalConsultation = true;
            $this->edit();
            
        } else {
            $this->hasMedicalConsultation = false;

        }
        return view('livewire.user-medical-consultation-form.user-medical-consultation-form')->layout('layouts.main');
    }
}
