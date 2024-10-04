<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\MedicalConsultation;
use App\Models\MedicalConsultationPart1;
use App\Models\MedicalConsultationPart2;
use App\Models\MedicalConsultationPart3;
use App\Models\MedicalConsultationPart4;
use App\Models\MedicalConsultationPart5;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'middleName',
        'nameExt',
        'email',
        'password',
        'created_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'created_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function medicalConsultation1()
    {
        return $this->hasOne(MedicalConsultationPart1::class);
    }

    public function medicalConsultation2()
    {
        return $this->hasOne(MedicalConsultationPart2::class);
    }

    public function medicalConsultation3()
    {
        return $this->hasOne(MedicalConsultationPart3::class);
    }

    public function medicalConsultation4()
    {
        return $this->hasOne(MedicalConsultationPart4::class);
    }

    public function medicalConsultation5()
    {
        return $this->hasOne(MedicalConsultationPart5::class);
    }


    public function getFullNameAttributeStaff()
    {
        return $this->firstName . ' ' . $this->middleName . ', ' .$this->lastName . ' ' . $this->nameExt;
    }

    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('M-d-Y'); // Format as M-d-Y
    }


    

}
