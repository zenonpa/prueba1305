<?php
 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Marca extends Model
{
    protected $fillable = [
        'nombre','referencia'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'marcaid');
    }

}
 
?>