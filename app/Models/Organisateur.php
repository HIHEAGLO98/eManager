<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisateur extends Model
{
    //use HasFactory;
    protected $fillable = ['nom', 'prenom','adress', 'contact', 'adress_org',

    ];

    protected $guarded =[];

    /**
     * un événement est  organisé par un ou plusieurs organisateurs.
     */
    public function events()
    {
        return $this->belongsToMany(Organisateur::class);

    }

}
