<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';

    protected $fillable = [
        'appointment_date',
        'appointment_id'
    ];

    public function appointment()
    {
        return $this->belongsTo('App\Models\Appointment', 'appointment_id');
    }
}
