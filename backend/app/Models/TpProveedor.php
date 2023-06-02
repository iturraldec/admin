<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TpProveedor extends Model
{
    protected $table = 'ADM_TpProveedor';
    protected $primaryKey = 'id';

    // Define los atributos asignables en masa (fillable) si es necesario
    protected $fillable = ['Nombre'];

    public function proveedores()
    {
        return $this->hasMany(Proveedor::class);
    }
}