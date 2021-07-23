<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatienceEncounter extends Model
{
    use HasFactory;
    protected $fillable = [
        'weight',
        'height',
        'bmi',
        'visit_type',
        'blood_pressure',
        'temperature',
        'respiratory_rate',
        'complaint',
        'time',
        'date',
        'diagnosis',
        'treatment',
        'health_worker_id',
        'patience_id'


    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

