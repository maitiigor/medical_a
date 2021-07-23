<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'patience_id',
        'health_worker_id',

    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function healthWorker(){
        return $this->belongsTo(HealthWorkers::class);
    }
    public function patience(){
        return $this->belongsTo(Patience::class);
    }
}
