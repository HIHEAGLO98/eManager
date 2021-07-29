<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    protected $guarded =[];

    /**
     * une ville regorge plusieurs salles.
     */
    public function salles()
    {
        return $this->hasMany(Ville::class);
    }

    /**
     * une ville appartient à un seul pays .
     */
    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }
}
