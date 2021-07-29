<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * une salle accueille plusieurs événements.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }


    /**
     * une salle se trouve  dans une seule ville.
     */

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

}
