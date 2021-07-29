<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Participant extends Model
{
   // use HasFactory;
    /**
     * Un participant peut acheter plusieurs tickets .
     */
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * un participant peut faire  une ou plus réservations.
     */

}
