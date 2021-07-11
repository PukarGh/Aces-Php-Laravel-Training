<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    public function goingParticipants()
    {
        return $this->hasMany(Participant::class)->where('going', 1);
    }

    public function notGoingParticipants()
    {
        return $this->hasMany(Participant::class)->where('going', 0);
    }
}
