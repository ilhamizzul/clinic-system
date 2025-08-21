<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MasterHealthInsurance extends Model
{
    protected $table = 'master_health_insurance';

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'insurance_name',
        'contact_info'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($insurance) {
            if (empty($insurance->id)) {
                $insurance->id = 'INS' . now()->format('ymd') . strtoupper(Str::random(6));
            }
        });
    }
}
