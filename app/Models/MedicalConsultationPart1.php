<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalConsultationPart1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'courseDesination',
        'date',
        'surname',
        'firstName',
        'middleName',
        'nameExt',
        'birthDate',
        'sex',
        'age',
        'address',
        'nationality',
        'religion',
        'cellphoneNumber',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

   

}
