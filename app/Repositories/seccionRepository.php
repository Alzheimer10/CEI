<?php

namespace App\Repositories;

use App\Models\seccion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class seccionRepository
 * @package App\Repositories
 * @version October 24, 2017, 11:46 am -04
 *
 * @method seccion findWithoutFail($id, $columns = ['*'])
 * @method seccion find($id, $columns = ['*'])
 * @method seccion first($columns = ['*'])
*/
class seccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'seccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return seccion::class;
    }
}
