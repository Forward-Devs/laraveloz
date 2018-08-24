<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $Nombre
 * @property string $Pais
 * @property string $IP
 * @property string $Fecha
 * @property string $Host
 */
class LogIngreso extends Model
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
    protected $fillable = ['Nombre', 'Pais', 'IP', 'Fecha', 'Host'];

}
