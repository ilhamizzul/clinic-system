<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patient';

    protected $primaryKey = 'id_patient';
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
        'id_patient',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($patient) {
            if (empty($patient->id_patient)) {
                $date = now()->format('ymd');
                $count = self::whereDate('created_at', now()->toDateString())->count() + 1;
                $patient->id_patient = 'P' . $date . str_pad($count, 3, '0', STR_PAD_LEFT);
            }
        });
    }
}
