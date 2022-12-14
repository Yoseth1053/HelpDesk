<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    use HasFactory;


    public $timestamps = false;

    protected  $table = 'incidentes';

    protected $fillable = [
        'id',
        'hora',
        'fecha',
        'idUsuario',
        'ambiente_id',
        'descripcion',
        'estado_id',

        'fechaRespuesta',
        'horaRespuesta',
        'fechaProg',
        'horaProg',
        'observacion',
        
        'fechaSolucion',
        'horaSolucion',
        'solucionImplementada'
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function ambiente()
    {
        return $this->belongsTo(Ambiente::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
