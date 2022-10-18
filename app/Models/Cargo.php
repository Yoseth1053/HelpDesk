<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected  $table = 'cargos';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'estado',
    ];

    public function getNombre(Request $request)
    {
        return $this->Cargo::where('id',$request)->select('nombre');
    }
}
