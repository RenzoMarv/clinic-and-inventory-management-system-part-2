<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalConsultationPart3 extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'bloodType',
        'weight',
        'height',
        'food',
        'foodSpecify',
        'medicine',
        'medicineSpecify',
        'part3Others',
        'part3OthersSpecify',
        'historyOfAsthma',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
