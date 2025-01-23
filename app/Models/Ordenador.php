<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenador extends Model
{
    /** @use HasFactory<\Database\Factories\OrdenadorFactory> */
    use HasFactory;

    protected $table = 'ordenadores';
    protected $fillable = ['codigo', 'marca', 'modelo', 'aula_id'];

    public function aula() {
        return $this->belongsTo(Aula::class);
    }

    public function dispositivos() {
        return $this->hasMany(Dispositivo::class);
    }

    public function cambios() {
        return $this->hasMany(Cambio::class);
    }
}
