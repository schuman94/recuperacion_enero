<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    /** @use HasFactory<\Database\Factories\DispositivoFactory> */
    use HasFactory;

    public function ordenador() {
        return $this->belongsTo(Ordenador::class);
    }
}
