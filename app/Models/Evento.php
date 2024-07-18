<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evento extends Model
{
    use HasFactory;

    public function Asistencia(): HasMany
    {
        return $this->hasMany('App\Models\Asistencia');
    }

    public function Actividad(): BelongsTo
    {
        return $this->belongsTo('App\Models\Actividad');
    }

    public function Movilidad(): BelongsTo
    {
        return $this->belongsTo('App\Models\Movilidad');
    }
}
