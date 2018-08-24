<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $fecha
 * @property string $Nombre
 * @property int $Integrantes
 * @property string $Lider
 * @property string $Rango1
 * @property string $Rango2
 * @property string $Rango3
 * @property string $Rango4
 * @property string $Rango5
 * @property string $Rango6
 * @property string $tipobanda
 * @property string $territorio
 * @property int $MaxIntegrantes
 * @property int $Rango5Inv
 * @property int $Rango5Exp
 * @property int $Rango5Edi
 * @property int $Rango4Inv
 * @property int $Rango4Exp
 * @property int $Rango4Edi
 * @property int $Rango3Inv
 * @property int $Rango3Exp
 * @property int $Rango3Edi
 * @property int $Rango2Inv
 * @property int $Rango2Exp
 * @property int $Rango2Edi
 * @property int $Rango1Inv
 * @property int $Rango1Exp
 * @property int $Rango1Edi
 */
class Faccion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'facciones';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['fecha', 'Nombre', 'Integrantes', 'Lider', 'Rango1', 'Rango2', 'Rango3', 'Rango4', 'Rango5', 'Rango6', 'tipobanda', 'territorio', 'MaxIntegrantes', 'Rango5Inv', 'Rango5Exp', 'Rango5Edi', 'Rango4Inv', 'Rango4Exp', 'Rango4Edi', 'Rango3Inv', 'Rango3Exp', 'Rango3Edi', 'Rango2Inv', 'Rango2Exp', 'Rango2Edi', 'Rango1Inv', 'Rango1Exp', 'Rango1Edi'];

}
