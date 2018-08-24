<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $IDPropietario
 * @property string $Propietario
 * @property int $EnVenta
 * @property int $Precio
 * @property int $EnUso
 * @property float $PosX
 * @property float $PosY
 * @property float $PosZ
 * @property float $PosXS
 * @property float $PosYS
 * @property float $PosZS
 * @property float $PosA
 * @property float $PosAS
 * @property int $Nivel
 * @property int $Tipo
 * @property int $EnVentaPor
 * @property int $Interior
 * @property int $InteriorID
 * @property int $Abierta
 * @property int $Sprunk
 * @property int $Cerveza
 * @property int $Aquarius
 * @property int $Pizzas
 * @property int $Vino
 * @property int $AK47
 * @property int $M4
 * @property int $EscopetaNormal
 * @property int $EscopetaDeCombate
 * @property int $MP5
 * @property int $9mm
 * @property int $9mmSilenciada
 * @property int $DesertEagle
 * @property int $Rifle
 * @property int $Granada
 * @property int $Manopla
 * @property int $Cuchillo
 * @property int $Katana
 * @property int $Medicamentos
 * @property int $Crack
 * @property int $VW
 * @property int $Camara
 * @property int $Flores
 * @property int $Pala
 * @property int $BateDeBeisbol
 * @property int $PaloDeGolf
 * @property float $GX
 * @property float $GY
 * @property float $GZ
 * @property float $GA
 * @property string $Localizacion
 * @property int $Ganancias
 * @property int $PaloDeBillar
 * @property int $ConsoladorRosa
 * @property int $VibradorBlanco
 * @property int $GranVibradorBlanco
 * @property int $VibradorPlateado
 * @property int $Baston
 */
class Propiedad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'propiedades';

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
    protected $fillable = ['IDPropietario', 'Propietario', 'EnVenta', 'Precio', 'EnUso', 'PosX', 'PosY', 'PosZ', 'PosXS', 'PosYS', 'PosZS', 'PosA', 'PosAS', 'Nivel', 'Tipo', 'EnVentaPor', 'Interior', 'InteriorID', 'Abierta', 'Sprunk', 'Cerveza', 'Aquarius', 'Pizzas', 'Vino', 'AK47', 'M4', 'EscopetaNormal', 'EscopetaDeCombate', 'MP5', '9mm', '9mmSilenciada', 'DesertEagle', 'Rifle', 'Granada', 'Manopla', 'Cuchillo', 'Katana', 'Medicamentos', 'Crack', 'VW', 'Camara', 'Flores', 'Pala', 'BateDeBeisbol', 'PaloDeGolf', 'GX', 'GY', 'GZ', 'GA', 'Localizacion', 'Ganancias', 'PaloDeBillar', 'ConsoladorRosa', 'VibradorBlanco', 'GranVibradorBlanco', 'VibradorPlateado', 'Baston'];

}
