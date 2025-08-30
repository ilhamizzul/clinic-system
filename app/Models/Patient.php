<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patient';

    protected $fillable = [
        'patient_id',
        'name',
        'NIK',
        'date_of_birth',
        'address',
        'phone_number',
        'gender',
        'allergies',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($patient) {
            if (empty($patient->patient_id)) {
                $patient->patient_id = 'P' . now()->format('ymd') . strtoupper(Str::random(6));
            }
        });
    }

    public function insurances(): BelongsToMany {
        return $this->belongsToMany(MasterHealthInsurance::class, 'patient_insurance_link')
        ->using(PatientInsuranceLink::class)
        ->withPivot([
            'id',
            'insurance_number',
            'effective_date',
            'expiration_date'
        ])->withTimestamps();
    }
}
