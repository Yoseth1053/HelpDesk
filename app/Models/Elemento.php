<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    use HasFactory;
    protected  $table = 'elementos';
    protected $fillable = [
        'id',
        'nombre',
        'estado',
    ];

    public function getNombre(Request $request)
    {
        return $this->Estado::where('id',$request)->select('nombre');
    }
    
}

