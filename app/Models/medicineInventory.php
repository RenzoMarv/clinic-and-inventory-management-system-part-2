<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class medicineInventory extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'medicineName',
        'qty',
        'expirationDate',
        'stockStatus',
        'description',
        'medicineForm',
    
    ];

    protected $casts = [
        'expirationDate' => 'datetime',
    ];

     // Accessor for formatted expirationDate
     public function getFormattedEventDateAttribute()
     {
         return $this->expirationDate->format('M-d-Y'); // Format as M-d-Y
     }

}
