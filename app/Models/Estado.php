<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected  $table = 'estados';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'estado',
    ];

    public function getNombre(Request $request)
    {
        return $this->Estado::where('id',$request)->select('nombre');
    }

    
}

