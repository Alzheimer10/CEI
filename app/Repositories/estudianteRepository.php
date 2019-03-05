<?php

namespace App\Repositories;

use App\Models\estudiante;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class estudianteRepository
 * @package App\Repositories
 * @version October 23, 2017, 9:37 am -04
 *
 * @method estudiante findWithoutFail($id, $columns = ['*'])
 * @method estudiante find($id, $columns = ['*'])
 * @method estudiante first($columns = ['*'])
*/
class estudianteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'fechaNacimiento',
        'sexo',
        'ci'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return estudiante::class;
    }
}
