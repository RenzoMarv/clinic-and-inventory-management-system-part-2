<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalExaminationModel3 extends Model
{
    use HasFactory;
    
    protected $fillable =
    [
        'bp',
        'temp',
        'hr',
        'rr',
        'height',
        'weight',
        'hearingNormal',
        'hearingImpaired',
        'visionWithglasses',
        'visionWithglassesR',
        'visionWithoutglasses',
        'visionWithoutglassesL',
        'chestXrayPAview',
        'chestXrayLordoticView',
        'chestXrayNormal',
        'chestXrayFindings',
        'completeBloodCountNormal',
        'completeBloodCountFindings',
        'routineUrinalysisNormal',
        'routineUrinalysisFindings',
        'fecalysisStoolExaminationNormal',
        'fecalysisStoolExaminationFindings',
        'hepatitisBscreeningNormal',
        'hepatitisBscreeningFindings',
        'drugTestMetaNegative',
        'drugTestMetaPositive',
        'drugTestTetraPositive',
        'drugTestTetraNegative',
        'signatureOverPrintedName',
        'attachPic',
    
    ];
}
