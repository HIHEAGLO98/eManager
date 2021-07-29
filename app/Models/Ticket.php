<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    /**
     * Un ticket appartient à un seul participant.
     */
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    /**
     * un ticket a un seul type_ticket .
     */
    public function type_ticket()
    {
        return $this->belongsTo(Type_event::class);
    }
}
