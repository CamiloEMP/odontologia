<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointment';
    protected $fillable = [
        'title',
        'body',
        'date',
        'observations',
        'id_user',
    ];

    public function userInfo()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function schedule()
    {
        return $this->hasOne('App\Models\Schedule', 'schedule_id');
    }
}
