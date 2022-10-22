<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected  $table = 'inventarios';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'cantidad',
        'elemento_id',
        'ambiente_id'
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
