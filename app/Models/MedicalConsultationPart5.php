<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalConsultationPart5 extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'blindOrVisuallyImpaired',
        'autism',
        'orthopedicallyChallenged',
        'chronicIllness',
        'part5CourseDesination',
        'deafOrMute',
        'congenitalDefects',
        'communicationDisorder',
        'a',
        'bYes',
        'bNo',
        'bDateOfOperation',
        'bTypeOfOperation',
        'bHospital',
        'cYes',
        'cNo',
        'cHospital',
        'cAttendingPhysician',
        'cDiagnosis',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
