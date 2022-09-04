<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cantidad',
        'elemento',
        'id_ambiente'
    ];

    public function elemento()
    {
        return $this->belongsTo(Elemento::class);
    }

    public function ambiente()
    {
        return $this->belongsTo(Ambiente::class);
    }
}
