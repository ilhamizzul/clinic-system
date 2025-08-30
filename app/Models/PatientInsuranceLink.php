<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Str;

class PatientInsuranceLink extends Pivot
{
    protected $table = 'patient_insurance_link';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = 'LINKINS' . now()->format('ymd') . strtoupper(Str::random(6));
            }
        });
    }
}
