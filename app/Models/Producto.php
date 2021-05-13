<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Producto extends Model
{
    protected $fillable = [
        'cantidad','fecembarque', 'nombre', 'observaciones', 'talla', 'marcaid'
    ];

    function marca(){
        return $this->belongsTo(Marca::class);
    }    
}
 