<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $Id
 * @property string $Cargos
 * @property int $Condena
 * @property string $Oficial
 * @property string $Datos
 * @property string $Fecha
 * @property int $UserID
 */
class Antecedente extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'Id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Cargos', 'Condena', 'Oficial', 'Datos', 'Fecha', 'UserID'];

}
