<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $faccj
 * @property string $user_ses
 * @property string $jugname
 * @property string $queue_params
 * @property int $status
 * @property string $Fecha
 * @property int $type
 */
class ActionQueue extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'action_queue';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = ['faccj', 'user_ses', 'jugname', 'queue_params', 'status', 'Fecha', 'type'];

}
