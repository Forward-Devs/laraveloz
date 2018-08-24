<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $nombre
 * @property string $fecha_nivel
 * @property int $sobre_ruedas
 * @property string $fecha_ruedas
 * @property int $automedicado
 * @property int $nro_remedio
 * @property string $fecha_remedio
 * @property int $adicto_crack
 * @property int $nro_crack
 * @property string $fecha_crack
 * @property int $medico
 * @property int $nro_salvado
 * @property string $fecha_salvado
 * @property int $tortuga
 * @property string $fecha_tortuga
 * @property int $techo_propio
 * @property string $fecha_techo
 * @property int $iniciando_negocios
 * @property string $fecha_negocio
 * @property int $lugar_trabajo
 * @property string $fecha_trabajo
 * @property int $cerrajero
 * @property int $nro_forzado
 * @property string $fecha_forzado
 * @property int $piloto_experto
 * @property int $ganadas
 * @property string $fecha_ganadas
 * @property int $negocio_redondo
 * @property int $cosecha
 * @property string $fecha_cosecha
 * @property int $marihuanero
 * @property int $porros
 * @property string $fecha_porros
 * @property string $mensaje
 * @property string $pais
 * @property int $mes
 * @property int $dia
 * @property int $ano
 * @property int $mostrar_edad
 * @property int $perfil
 */
class Logro extends Model
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
    protected $fillable = ['nombre', 'fecha_nivel', 'sobre_ruedas', 'fecha_ruedas', 'automedicado', 'nro_remedio', 'fecha_remedio', 'adicto_crack', 'nro_crack', 'fecha_crack', 'medico', 'nro_salvado', 'fecha_salvado', 'tortuga', 'fecha_tortuga', 'techo_propio', 'fecha_techo', 'iniciando_negocios', 'fecha_negocio', 'lugar_trabajo', 'fecha_trabajo', 'cerrajero', 'nro_forzado', 'fecha_forzado', 'piloto_experto', 'ganadas', 'fecha_ganadas', 'negocio_redondo', 'cosecha', 'fecha_cosecha', 'marihuanero', 'porros', 'fecha_porros', 'mensaje', 'pais', 'mes', 'dia', 'ano', 'mostrar_edad', 'perfil'];

}
