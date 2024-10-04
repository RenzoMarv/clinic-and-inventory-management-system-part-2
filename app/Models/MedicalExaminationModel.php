<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalExaminationModel extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'docuControl',
        'lastName',
        'firstName',
        'middleName',
        'gender',
        'cellphoneNo',
        'address',
        'date',
        'birthday',
        'age',
        'civilStatus',
        'emailAddress',
        'courseYearDesignation',
        'purpose',
        'pastMedHistory',
        'familyHistory',
        'occupationHistory',
    
    ];

    public function medicalExaminationForm(){
        return $this->belongsTo(MedicalExaminationPivotModel::class);
    }
}
