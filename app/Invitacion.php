<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $Activo
 * @property string $Invitador
 * @property string $Invitado
 * @property int $BandaID
 * @property string $Fecha
 */
class Invitacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'invitaciones';

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
    protected $fillable = ['Activo', 'Invitador', 'Invitado', 'BandaID', 'Fecha'];

}
