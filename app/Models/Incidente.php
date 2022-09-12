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
        'ambiente_id',
        'descripcion',
        'estado_id',

        'fechaRespuesta',
        'horaRespuesta',
        'fechaProg',
        'horaProg',
        
        'fechaSolucion',
        'horaSolucion',
        'solucionImplementada'
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
