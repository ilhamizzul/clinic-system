<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterHealthInsurance extends Model
{
    protected $table = 'master_health_insurance';

    protected $fillable = [
        'insurance_name',
        'contact_name'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($insurance) {
            if (empty($insurance->id_insurance)) {
                $date = now()->format('ymd');
                $count = self::whereDate('created_at', now()->toDateString())->count() + 1;
                $insurance->id_insurance = 'INS' . $date . str_pad($count, 3, '0', STR_PAD_LEFT);
            }
        });
    }
}
