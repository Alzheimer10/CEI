<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class seccion
 * @package App\Models
 * @version October 24, 2017, 11:46 am -04
 *
 * @property \App\Models\grado grado
 * @property \Illuminate\Database\Eloquent\Collection boleta
 * @property string seccion
 * @property integer grado_id
 */
class seccion extends Model
{
    use SoftDeletes;

    public $table = 'seccions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'seccion',
        'grado_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'seccion' => 'string',
        'grado_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'seccion' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function grado()
    {
        return $this->belongsTo(\App\Models\grado::class, 'grado_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function boletas()
    {
        return $this->hasMany(\App\Models\boleta::class);
    }
}
