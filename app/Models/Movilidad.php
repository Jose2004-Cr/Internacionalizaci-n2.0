<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movilidad extends Model
{
    use HasFactory;

    public function Evento(): HasMany
    {
        return $this->hasMany('App\Models\Evento');
    }
}
