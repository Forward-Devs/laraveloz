<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $propietario
 * @property int $modelo
 * @property int $precio
 * @property float $x
 * @property float $y
 * @property float $z
 * @property float $a
 * @property string $color1
 * @property string $color2
 * @property string $comprable
 * @property int $moneda
 * @property int $faccion
 * @property int $trabajo
 */
class Vehicle extends Model
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
    protected $fillable = ['propietario', 'modelo', 'precio', 'x', 'y', 'z', 'a', 'color1', 'color2', 'comprable', 'moneda', 'faccion', 'trabajo'];

}
