<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalConsultationPart4 extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'asthma',
        'bronchitis',
        'chickenPox',
        'epilepsy',
        'gastritis',
        'heartDisease',
        'hypertension',
        'measles',
        'muscleSpasm',
        'pneumonia',
        'skinAllergy',
        'tonsilitis',
        'tuberculosis',
        'uti',
        'part4Others',
        'part4OthersSpecify',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
