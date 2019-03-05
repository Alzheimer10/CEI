<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class estudiante
 * @package App\Models
 * @version October 23, 2017, 9:37 am -04
 *
 * @property \Illuminate\Database\Eloquent\Collection direccion
 * @property \Illuminate\Database\Eloquent\Collection boleta
 * @property string nombre
 * @property string apellido
 * @property date fechaNacimiento
 * @property string sexo
 * @property string ci
 */
class estudiante extends Model
{

    public $table = 'estudiantes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'fechaNacimiento',
        'sexo',
        'ci'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'fechaNacimiento' => 'date',
        'sexo' => 'string',
        'ci' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'fechaNacimiento' => 'required',
        'sexo' => 'required',
        'ci' => 'required|unique:estudiantes'
    ];

    public function getnombreCompletoAttribute()
    {
        return $this->nombre . ' ' . $this->apellido;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function representantes()
    {
        return $this->hasMany(\App\Models\representante::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function boletas()
    {
        return $this->hasMany(\App\Models\boleta::class)->orderBy('created_at', 'desc');
    }

    public function getedadAttribute()
    {
        return $this->fechaNacimiento->diff(\Carbon\Carbon::now())->format('%y Años, %m Meses ');
    }

}
