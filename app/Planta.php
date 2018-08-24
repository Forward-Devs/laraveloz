<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $pID
 * @property string $paX
 * @property string $paY
 * @property string $paZ
 * @property int $pSegundos
 * @property int $pMinutos
 * @property int $pHoras
 * @property int $pEstado
 * @property string $Plantador
 * @property int $Creado
 */
class Planta extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'pID';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['paX', 'paY', 'paZ', 'pSegundos', 'pMinutos', 'pHoras', 'pEstado', 'Plantador', 'Creado'];

}
