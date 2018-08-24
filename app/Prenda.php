<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $Propietario
 * @property int $Objeto
 * @property int $Slot
 * @property int $ObjUsed
 * @property float $fOffsetX
 * @property float $fOffsetY
 * @property float $fOffsetZ
 * @property float $fRotX
 * @property float $fRotY
 * @property float $fRotZ
 * @property float $fScaleX
 * @property float $fScaleY
 * @property float $fScaleZ
 * @property int $ATH
 * @property int $Web
 */
class Prenda extends Model
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
    protected $fillable = ['Propietario', 'Objeto', 'Slot', 'ObjUsed', 'fOffsetX', 'fOffsetY', 'fOffsetZ', 'fRotX', 'fRotY', 'fRotZ', 'fScaleX', 'fScaleY', 'fScaleZ', 'ATH', 'Web'];

}
