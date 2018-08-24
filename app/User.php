<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $Username
 * @property string $Password
 * @property float $posX
 * @property float $posY
 * @property float $posZ
 * @property int $Admin
 * @property string $Sexo
 * @property int $Edad
 * @property string $Skin
 * @property float $Vida
 * @property float $Chaleco
 * @property string $Registro
 * @property int $Tutorial
 * @property int $Money
 * @property int $Banco
 * @property int $Moneda
 * @property string $Cargos
 * @property string $Duty
 * @property string $SkinTrabajo
 * @property string $Nivel
 * @property string $Experiencia
 * @property string $Agonizando
 * @property string $GPS
 * @property string $Radio
 * @property string $Numero
 * @property int $Interior
 * @property int $MundoVirtual
 * @property int $Materiales
 * @property int $Sed
 * @property int $Trabajo
 * @property int $Trabajo2
 * @property string $Faccion
 * @property string $Rango
 * @property int $Crack
 * @property int $Medicamentos
 * @property string $Agenda
 * @property string $Licencia
 * @property int $TiempoPD
 * @property int $TiempoJail
 * @property int $TiempoCarcelM
 * @property int $Repuestos
 * @property float $hx
 * @property float $hy
 * @property float $hz
 * @property string $Baneado
 * @property string $razon
 * @property string $IP
 * @property int $NMute
 * @property int $changenamefree
 * @property int $Online
 * @property string $Email
 * @property int $EMS
 * @property int $TiempoCarcelS
 * @property int $Changed
 * @property int $Multas
 * @property int $Stats
 * @property string $EnCasa
 * @property string $EnRopero
 * @property int $EnGarage
 * @property int $VIP
 * @property int $FinDia
 * @property int $FinMes
 * @property int $FinAno
 * @property int $hprecio
 * @property int $h2precio
 * @property int $hmoneda
 * @property int $h2moneda
 * @property int $CasaID
 * @property int $CasaID2
 * @property string $WP0
 * @property string $WP1
 * @property string $WP2
 * @property string $WP3
 * @property string $WP4
 * @property string $WP5
 * @property string $WP6
 * @property string $WP7
 * @property string $WP8
 * @property string $WP9
 * @property string $WP10
 * @property string $WP11
 * @property string $WP12
 * @property string $NivelArmero
 * @property string $ExpArmero
 * @property int $NivelPescador
 * @property int $ExpPescador
 * @property int $NivelPiloto
 * @property int $ExpPiloto
 * @property string $NivelCamionero
 * @property string $ExpCamionero
 * @property int $NivelTransportista
 * @property int $ExpTransportista
 * @property int $NivelBasurero
 * @property int $ExpBasurero
 * @property int $NivelLadron
 * @property int $ExpLadron
 * @property float $OX
 * @property float $OY
 * @property float $OZ
 * @property float $OA
 * @property int $VE1
 * @property int $VE2
 * @property int $VE3
 * @property int $VE4
 * @property int $vMoneda
 * @property string $Modelo
 * @property int $vTraba
 * @property int $vGas
 * @property int $vinterior
 * @property int $vvw
 * @property int $Color1
 * @property int $Color2
 * @property float $VidaV
 * @property int $vBaul
 * @property int $vBaul2
 * @property int $vBaul3
 * @property int $vBaul4
 * @property int $vBaul5
 * @property int $vBaul6
 * @property int $vBaul7
 * @property int $vBaul8
 * @property int $PaintJob
 * @property string $1Patente
 * @property int $1Componentes0
 * @property int $1Componentes1
 * @property int $1Componentes2
 * @property int $1Componentes3
 * @property int $1Componentes4
 * @property int $1Componentes5
 * @property int $1Componentes6
 * @property int $1Componentes7
 * @property int $1Componentes8
 * @property int $1Componentes9
 * @property int $1Componentes10
 * @property int $1Componentes11
 * @property int $1Componentes12
 * @property int $1Componentes13
 * @property string $Precio
 * @property float $X
 * @property float $Y
 * @property float $Z
 * @property float $A
 * @property int $Ovw
 * @property string $Segurov
 * @property int $Ointerior
 * @property float $OX2
 * @property float $OY2
 * @property float $OZ2
 * @property float $OA2
 * @property int $V2E1
 * @property int $V2E2
 * @property int $V2E3
 * @property int $V2E4
 * @property int $v2Moneda
 * @property int $Modelo2
 * @property int $v2Traba
 * @property int $v2Gas
 * @property int $v2interior
 * @property int $v2vw
 * @property int $2Color1
 * @property int $2Color2
 * @property float $VidaV2
 * @property int $v2Baul
 * @property int $v2Baul2
 * @property int $v2Baul3
 * @property int $v2Baul4
 * @property int $v2Baul5
 * @property int $v2Baul6
 * @property int $v2Baul7
 * @property int $v2Baul8
 * @property int $PaintJob2
 * @property string $2Patente
 * @property int $2Componentes0
 * @property int $2Componentes1
 * @property int $2Componentes2
 * @property int $2Componentes3
 * @property int $2Componentes4
 * @property int $2Componentes5
 * @property int $2Componentes6
 * @property int $2Componentes7
 * @property int $2Componentes8
 * @property int $2Componentes9
 * @property int $2Componentes10
 * @property int $2Componentes11
 * @property int $2Componentes12
 * @property int $2Componentes13
 * @property int $Precio2
 * @property float $X2
 * @property float $Y2
 * @property float $Z2
 * @property float $A2
 * @property int $Ovw2
 * @property int $Segurov2
 * @property int $Ointerior2
 * @property int $RopaBasu
 * @property int $RopaMedi
 * @property int $RopaMeca
 * @property int $RopaMine
 * @property int $Martillo
 * @property int $Destornillador
 * @property int $Barreta
 * @property int $Balde
 * @property int $ent_totem
 * @property string $totem
 * @property int $totems
 * @property float $OX3
 * @property float $OY3
 * @property float $OZ3
 * @property float $OA3
 * @property int $V3E1
 * @property int $V3E2
 * @property int $V3E3
 * @property int $V3E4
 * @property int $v3Moneda
 * @property int $Modelo3
 * @property int $v3Traba
 * @property int $v3Gas
 * @property int $v3interior
 * @property int $v3vw
 * @property int $3Color1
 * @property int $3Color2
 * @property float $VidaV3
 * @property int $v3Baul
 * @property int $v3Baul2
 * @property int $v3Baul3
 * @property int $v3Baul4
 * @property int $v3Baul5
 * @property int $v3Baul6
 * @property int $v3Baul7
 * @property int $v3Baul8
 * @property int $PaintJob3
 * @property string $3Patente
 * @property int $3Componentes0
 * @property int $3Componentes1
 * @property int $3Componentes2
 * @property int $3Componentes3
 * @property int $3Componentes4
 * @property int $3Componentes5
 * @property int $3Componentes6
 * @property int $3Componentes7
 * @property int $3Componentes8
 * @property int $3Componentes9
 * @property int $3Componentes10
 * @property int $3Componentes11
 * @property int $3Componentes12
 * @property int $3Componentes13
 * @property int $Precio3
 * @property float $X3
 * @property float $Y3
 * @property float $Z3
 * @property float $A3
 * @property int $Ovw3
 * @property int $Segurov3
 * @property int $Ointerior3
 * @property float $OX4
 * @property float $OY4
 * @property float $OZ4
 * @property float $OA4
 * @property int $V4E1
 * @property int $V4E2
 * @property int $V4E3
 * @property int $V4E4
 * @property int $v4Moneda
 * @property int $Modelo4
 * @property int $v4Traba
 * @property int $v4Gas
 * @property int $v4interior
 * @property int $v4vw
 * @property int $4Color1
 * @property int $4Color2
 * @property float $VidaV4
 * @property int $v4Baul
 * @property int $v4Baul2
 * @property int $v4Baul3
 * @property int $v4Baul4
 * @property int $v4Baul5
 * @property int $v4Baul6
 * @property int $v4Baul7
 * @property int $v4Baul8
 * @property int $PaintJob4
 * @property string $4Patente
 * @property int $4Componentes0
 * @property int $4Componentes1
 * @property int $4Componentes2
 * @property int $4Componentes3
 * @property int $4Componentes4
 * @property int $4Componentes5
 * @property int $4Componentes6
 * @property int $4Componentes7
 * @property int $4Componentes8
 * @property int $4Componentes9
 * @property int $4Componentes10
 * @property int $4Componentes11
 * @property int $4Componentes12
 * @property int $4Componentes13
 * @property int $Precio4
 * @property float $X4
 * @property float $Y4
 * @property float $Z4
 * @property float $A4
 * @property int $Ovw4
 * @property int $Segurov4
 * @property int $Ointerior4
 * @property int $NivelMinero
 * @property int $ExpMinero
 * @property int $Regalo
 * @property int $arrestado
 * @property int $horasjugadas
 * @property string $TipoCarcel
 * @property string $SocioHP
 * @property int $Hambre
 * @property int $Patines
 * @property int $PuntosCarrera
 * @property int $TieneEmisora
 * @property string $NombreEmisora
 * @property string $Conexion
 * @property int $Semillas
 * @property int $Swat
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usuarios';

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
    protected $fillable = ['Username', 'Password', 'posX', 'posY', 'posZ', 'Admin', 'Sexo', 'Edad', 'Skin', 'Vida', 'Chaleco', 'Registro', 'Tutorial', 'Money', 'Banco', 'Moneda', 'Cargos', 'Duty', 'SkinTrabajo', 'Nivel', 'Experiencia', 'Agonizando', 'GPS', 'Radio', 'Numero', 'Interior', 'MundoVirtual', 'Materiales', 'Sed', 'Trabajo', 'Trabajo2', 'Faccion', 'Rango', 'Crack', 'Medicamentos', 'Agenda', 'Licencia', 'TiempoPD', 'TiempoJail', 'TiempoCarcelM', 'Repuestos', 'hx', 'hy', 'hz', 'Baneado', 'razon', 'IP', 'NMute', 'changenamefree', 'Online', 'Email', 'EMS', 'TiempoCarcelS', 'Changed', 'Multas', 'Stats', 'EnCasa', 'EnRopero', 'EnGarage', 'VIP', 'FinDia', 'FinMes', 'FinAno', 'hprecio', 'h2precio', 'hmoneda', 'h2moneda', 'CasaID', 'CasaID2', 'WP0', 'WP1', 'WP2', 'WP3', 'WP4', 'WP5', 'WP6', 'WP7', 'WP8', 'WP9', 'WP10', 'WP11', 'WP12', 'NivelArmero', 'ExpArmero', 'NivelPescador', 'ExpPescador', 'NivelPiloto', 'ExpPiloto', 'NivelCamionero', 'ExpCamionero', 'NivelTransportista', 'ExpTransportista', 'NivelBasurero', 'ExpBasurero', 'NivelLadron', 'ExpLadron', 'OX', 'OY', 'OZ', 'OA', 'VE1', 'VE2', 'VE3', 'VE4', 'vMoneda', 'Modelo', 'vTraba', 'vGas', 'vinterior', 'vvw', 'Color1', 'Color2', 'VidaV', 'vBaul', 'vBaul2', 'vBaul3', 'vBaul4', 'vBaul5', 'vBaul6', 'vBaul7', 'vBaul8', 'PaintJob', '1Patente', '1Componentes0', '1Componentes1', '1Componentes2', '1Componentes3', '1Componentes4', '1Componentes5', '1Componentes6', '1Componentes7', '1Componentes8', '1Componentes9', '1Componentes10', '1Componentes11', '1Componentes12', '1Componentes13', 'Precio', 'X', 'Y', 'Z', 'A', 'Ovw', 'Segurov', 'Ointerior', 'OX2', 'OY2', 'OZ2', 'OA2', 'V2E1', 'V2E2', 'V2E3', 'V2E4', 'v2Moneda', 'Modelo2', 'v2Traba', 'v2Gas', 'v2interior', 'v2vw', '2Color1', '2Color2', 'VidaV2', 'v2Baul', 'v2Baul2', 'v2Baul3', 'v2Baul4', 'v2Baul5', 'v2Baul6', 'v2Baul7', 'v2Baul8', 'PaintJob2', '2Patente', '2Componentes0', '2Componentes1', '2Componentes2', '2Componentes3', '2Componentes4', '2Componentes5', '2Componentes6', '2Componentes7', '2Componentes8', '2Componentes9', '2Componentes10', '2Componentes11', '2Componentes12', '2Componentes13', 'Precio2', 'X2', 'Y2', 'Z2', 'A2', 'Ovw2', 'Segurov2', 'Ointerior2', 'RopaBasu', 'RopaMedi', 'RopaMeca', 'RopaMine', 'Martillo', 'Destornillador', 'Barreta', 'Balde', 'ent_totem', 'totem', 'totems', 'OX3', 'OY3', 'OZ3', 'OA3', 'V3E1', 'V3E2', 'V3E3', 'V3E4', 'v3Moneda', 'Modelo3', 'v3Traba', 'v3Gas', 'v3interior', 'v3vw', '3Color1', '3Color2', 'VidaV3', 'v3Baul', 'v3Baul2', 'v3Baul3', 'v3Baul4', 'v3Baul5', 'v3Baul6', 'v3Baul7', 'v3Baul8', 'PaintJob3', '3Patente', '3Componentes0', '3Componentes1', '3Componentes2', '3Componentes3', '3Componentes4', '3Componentes5', '3Componentes6', '3Componentes7', '3Componentes8', '3Componentes9', '3Componentes10', '3Componentes11', '3Componentes12', '3Componentes13', 'Precio3', 'X3', 'Y3', 'Z3', 'A3', 'Ovw3', 'Segurov3', 'Ointerior3', 'OX4', 'OY4', 'OZ4', 'OA4', 'V4E1', 'V4E2', 'V4E3', 'V4E4', 'v4Moneda', 'Modelo4', 'v4Traba', 'v4Gas', 'v4interior', 'v4vw', '4Color1', '4Color2', 'VidaV4', 'v4Baul', 'v4Baul2', 'v4Baul3', 'v4Baul4', 'v4Baul5', 'v4Baul6', 'v4Baul7', 'v4Baul8', 'PaintJob4', '4Patente', '4Componentes0', '4Componentes1', '4Componentes2', '4Componentes3', '4Componentes4', '4Componentes5', '4Componentes6', '4Componentes7', '4Componentes8', '4Componentes9', '4Componentes10', '4Componentes11', '4Componentes12', '4Componentes13', 'Precio4', 'X4', 'Y4', 'Z4', 'A4', 'Ovw4', 'Segurov4', 'Ointerior4', 'NivelMinero', 'ExpMinero', 'Regalo', 'arrestado', 'horasjugadas', 'TipoCarcel', 'SocioHP', 'Hambre', 'Patines', 'PuntosCarrera', 'TieneEmisora', 'NombreEmisora', 'Conexion', 'Semillas', 'Swat'];

}