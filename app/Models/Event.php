<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //use HasFactory;
    protected $fillable = ['nom_ev', 'adress','description', 'nbre_place', 'datedebut', 'datefin',
                            'heuredebut', 'heurefin',

    ];

    /** 1
     * un organisateur peut organiser plusieurs événements.
     */
    public function organisateurs()
    {
        return $this->belongsToMany(Organisateur::class);
    }


    /** 2
     * un événement a plusieurs images.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }


    /** 3
     * une événement se déroule dans une seule  salle.
     */
    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    /** 4
     * un événement regroupe  plusieurs Tickets.
     */
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    /** 5
     * un événement appartient à un seul type d'événements.
     */
    public function type_event()
    {
        return $this->belongsTo(Type_event::class);
    }



}
