<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $Fecha
 * @property string $Enviador
 * @property string $Receptor
 * @property string $Monto
 */
class LogTransacciones extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Fecha', 'Enviador', 'Receptor', 'Monto'];

}
