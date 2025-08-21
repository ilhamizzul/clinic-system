<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patient';

    protected $primaryKey = 'patient_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
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
}
