<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TpProveedor extends Model
{
    protected $table = 'adm_tp_proveedor';
    //protected $primaryKey = 'id';

    // Define los atributos asignables en masa (fillable) si es necesario
    protected $fillable = ['nombre'];

    public function proveedores()
    {
        return $this->hasMany(Proveedor::class);
    }
}