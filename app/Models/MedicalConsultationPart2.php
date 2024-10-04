<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalConsultationPart2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fatherName',
        'fatherDOB',
        'fatherOccupation',
        'motherName',
        'motherDOB',
        'motherOccupation',
        'personToBeNotified',
        'part2CellphoneNumber',
        'canotBeReachName',
        'canotBeReachCellphoneNumber',
        'cannotBeReachRelationToThePatient',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
