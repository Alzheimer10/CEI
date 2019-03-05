<?php

namespace App\Repositories;

use App\Models\representante;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class representanteRepository
 * @package App\Repositories
 * @version October 23, 2017, 10:48 am -04
 *
 * @method representante findWithoutFail($id, $columns = ['*'])
 * @method representante find($id, $columns = ['*'])
 * @method representante first($columns = ['*'])
*/
class representanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'email',
        'tlf',
        'estudiante_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return representante::class;
    }
}
