<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class representante
 * @package App\Models
 * @version October 23, 2017, 10:48 am -04
 *
 * @property \App\Models\estudiante estudiante
 * @property string nombre
 * @property string email
 * @property string tlf
 * @property integer estudiante_id
 */
class representante extends Model
{

    public $table = 'representantes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'email',
        'tlf',
        'estudiante_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'email' => 'string',
        'tlf' => 'string',
        'estudiante_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'estudiante_id' => 'required' 
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function estudiante()
    {
        return $this->belongsTo(\App\Models\estudiante::class, 'estudiante_id');
    }
}
