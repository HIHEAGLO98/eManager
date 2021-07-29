<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_event extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * un type d'événement regroupe  plusieurs événements.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
