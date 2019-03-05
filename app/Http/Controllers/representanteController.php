<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterepresentanteRequest;
use App\Http\Requests\UpdaterepresentanteRequest;
use App\Repositories\representanteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class representanteController extends AppBaseController
{
    /** @var  representanteRepository */
    private $representanteRepository;

    public function __construct(representanteRepository $representanteRepo)
    {
        $this->representanteRepository = $representanteRepo;
    }

    /**
     * Display a listing of the representante.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->representanteRepository->pushCriteria(new RequestCriteria($request));
        $representantes = $this->representanteRepository->all();

        return view('representantes.index')
            ->with('representantes', $representantes);
    }

    /**
     * Show the form for creating a new representante.
     *
     * @return Response
     */
    public function create()
    {
        return view('representantes.create');
    }

    /**
     * Store a newly created representante in storage.
     *
     * @param CreaterepresentanteRequest $request
     *
     * @return Response
     */
    public function store(CreaterepresentanteRequest $request)
    {
        $input = $request->all();

        $representante = $this->representanteRepository->create($input);

        Flash::success('Representante saved successfully.');

        return redirect(route('representantes.index'));
    }

    /**
     * Display the specified representante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            Flash::error('Representante no encontrado');

            return redirect(route('representantes.index'));
        }

        return view('representantes.show')->with('representante', $representante);
    }

    /**
     * Show the form for editing the specified representante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            Flash::error('Representante no encontrado');

            return redirect(route('representantes.index'));
        }

        return view('representantes.edit')->with('representante', $representante);
    }

    /**
     * Update the specified representante in storage.
     *
     * @param  int              $id
     * @param UpdaterepresentanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterepresentanteRequest $request)
    {
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            Flash::error('Representante no encontrado');

            return redirect(route('representantes.index'));
        }

        $representante = $this->representanteRepository->update($request->all(), $id);

        Flash::success('Representante actualizado.');

        return redirect(route('representantes.index'));
    }

    /**
     * Remove the specified representante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            Flash::error('Representante no encontrado');

            return redirect(route('representantes.index'));
        }

        $this->representanteRepository->delete($id);

        Flash::success('Representante eliminado.');

        return redirect(route('representantes.index'));
    }
}
