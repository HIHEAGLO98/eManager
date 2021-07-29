<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   // use HasFactory;
    protected $guarded = [];


    /**
     * une image appartient à un seul  événement.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
