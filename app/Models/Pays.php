<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * un pays possède plusieurs villes.
     */
    public function villes()
    {
        return $this->hasMany(Ville::class);
    }

}
