<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalExaminationModel4 extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'classA',
        'classB',
        'classC',
        'skinDesease',
        'dentalDefects',
        'anemia',
        'poorVision',
        'urinaryTractInfection',
        'intestinalParasitism',
        'mildHypertension',
        'diabetes',
        'remarks',
    
    ];
}
