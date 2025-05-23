<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipos';

    protected $fillable = [
        'usuario_id', 'carta_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function carta()
    {
        return $this->belongsTo(Carta::class);
    }

    public function partida()
    {
        return $this->belongsTo(Partida::class);
    }
}
