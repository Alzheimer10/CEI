<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterepresentanteAPIRequest;
use App\Http\Requests\API\UpdaterepresentanteAPIRequest;
use App\Models\representante;
use App\Repositories\representanteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class representanteController
 * @package App\Http\Controllers\API
 */

class representanteAPIController extends AppBaseController
{
    /** @var  representanteRepository */
    private $representanteRepository;

    public function __construct(representanteRepository $representanteRepo)
    {
        $this->representanteRepository = $representanteRepo;
    }

    /**
     * Display a listing of the representante.
     * GET|HEAD /representantes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->representanteRepository->pushCriteria(new RequestCriteria($request));
        $this->representanteRepository->pushCriteria(new LimitOffsetCriteria($request));
        $representantes = $this->representanteRepository->all();

        return $this->sendResponse($representantes->toArray(), 'Representantes retrieved successfully');
    }

    /**
     * Store a newly created representante in storage.
     * POST /representantes
     *
     * @param CreaterepresentanteAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterepresentanteAPIRequest $request)
    {
        $input = $request->all();

        $representantes = $this->representanteRepository->create($input);

        return $this->sendResponse($representantes->toArray(), 'Representante saved successfully');
    }

    /**
     * Display the specified representante.
     * GET|HEAD /representantes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var representante $representante */
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            return $this->sendError('Representante not found');
        }

        return $this->sendResponse($representante->toArray(), 'Representante retrieved successfully');
    }

    /**
     * Update the specified representante in storage.
     * PUT/PATCH /representantes/{id}
     *
     * @param  int $id
     * @param UpdaterepresentanteAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterepresentanteAPIRequest $request)
    {
        $input = $request->all();

        /** @var representante $representante */
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            return $this->sendError('Representante not found');
        }

        $representante = $this->representanteRepository->update($input, $id);

        return $this->sendResponse($representante->toArray(), 'representante updated successfully');
    }

    /**
     * Remove the specified representante from storage.
     * DELETE /representantes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var representante $representante */
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            return $this->sendError('Representante not found');
        }

        $representante->delete();

        return $this->sendResponse($id, 'Representante deleted successfully');
    }
}
