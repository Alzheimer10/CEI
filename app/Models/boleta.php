<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class boleta
 * @package App\Models
 * @version October 24, 2017, 11:19 am -04
 *
 * @property \App\Models\estudiante estudiante
 * @property \App\Models\seccion seccion
 * @property string a_escolar
 * @property string trimestre
 * @property string boleta
 * @property string observacion
 * @property integer estudiante_id
 * @property integer seccion_id
 */
class boleta extends Model
{
    // use SoftDeletes;
    // protected $dates = ['deleted_at'];
    

    public $table = 'boletas';
    



    public $fillable = [
        'a_escolar',
        'trimestre',
        'boleta',
        'observacion',
        'estudiante_id',
        'seccion_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'a_escolar' => 'string',
        'trimestre' => 'string',
        'boleta' => 'string',
        'observacion' => 'text',
        'estudiante_id' => 'integer',
        'seccion_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'a_escolar' => 'required',
        'trimestre' => 'required',
        'estudiante_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function estudiante()
    {
        return $this->belongsTo(\App\Models\estudiante::class, 'estudiante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function seccion()
    {
        return $this->belongsTo(\App\Models\seccion::class, 'seccion_id');
    }
    // ->withTrashed()
}
