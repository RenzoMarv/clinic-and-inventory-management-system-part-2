<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentalConsultationModel extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable =
    [
        'name',
        'address',
        'age',
        'sex',
        'courseYears',
        'contactNumber',
        'caseHistory',
        'chiefComplaint',
        'examinedBy',
        'date_user',
        'date_admin',
        'vs_admin',
        'servicesRendered_admin',
    
    ];
}
