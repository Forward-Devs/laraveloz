<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $Vendedor
 * @property int $arma
 * @property int $precio
 * @property string $comprador
 * @property string $item
 * @property int $cantidad
 * @property string $fecha
 */
class LogVenta extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Vendedor', 'arma', 'precio', 'comprador', 'item', 'cantidad', 'fecha'];

}
