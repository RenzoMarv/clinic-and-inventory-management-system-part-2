<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalExaminationModel2 extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'bmiNormal',
        'bmiFindings',
        'skinNormal',
        'skinFindings',
        'headNormal',
        'headFindingsl',
        'eyesNormal',
        'eyesFindings',
        'earsNomral',
        'earsFindings',
        'mouthNormal',
        'mouthFindings',
        'neckNormal',
        'neckFindings',
        'chestNormal',
        'chestFindings',
        'abdomenNormal',
        'abdomenFindings',
        'rectalNormal',
        'rectalFindings',
        'muscoNormal',
        'muscoFindings',
        'extremitiesNormal',
        'extremitiesFindings',
        'others',
    
    ];
}
