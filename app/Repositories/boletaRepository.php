<?php

namespace App\Repositories;

use App\Models\boleta;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class boletaRepository
 * @package App\Repositories
 * @version October 24, 2017, 11:19 am -04
 *
 * @method boleta findWithoutFail($id, $columns = ['*'])
 * @method boleta find($id, $columns = ['*'])
 * @method boleta first($columns = ['*'])
*/
class boletaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'a_escolar',
        'trimestre',
        'boleta',
        'observacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return boleta::class;
    }
}
