<?php

namespace App\Repositories;

use App\Models\grado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class gradoRepository
 * @package App\Repositories
 * @version October 24, 2017, 11:41 am -04
 *
 * @method grado findWithoutFail($id, $columns = ['*'])
 * @method grado find($id, $columns = ['*'])
 * @method grado first($columns = ['*'])
*/
class gradoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'grado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return grado::class;
    }
}
