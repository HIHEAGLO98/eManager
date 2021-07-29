<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Un rôle appartient à plusieurs utilisateurs.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
