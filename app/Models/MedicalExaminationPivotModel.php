<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalExaminationPivotModel extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function medicalExaminationForm1()
    {
        return $this->hasOne(MedicalExaminationModel::class);
    }
    public function medicalExaminationForm2()
    {
        return $this->hasOne(MedicalExaminationModel2::class);
    }
    public function medicalExaminationForm3()
    {
        return $this->hasOne(MedicalExaminationModel3::class);
    }
    public function medicalExaminationForm4()
    {
        return $this->hasOne(MedicalExaminationModel4::class);
    }

}
