<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'ubicacion',
    ];

    public function getNombre(Request $request)
    {
        return $this->Ambiente::where('id',$request)->select('nombre');
    }

    
}

