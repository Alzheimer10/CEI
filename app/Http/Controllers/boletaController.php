<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateboletaRequest;
use App\Http\Requests\UpdateboletaRequest;
use App\Repositories\boletaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use File;

class boletaController extends AppBaseController
{
    /** @var  boletaRepository */
    private $boletaRepository;

    public function __construct(boletaRepository $boletaRepo)
    {
        $this->boletaRepository = $boletaRepo;
    }

    /**
     * Display a listing of the boleta.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->boletaRepository->pushCriteria(new RequestCriteria($request));
        $boletas = $this->boletaRepository->all();

        return view('boletas.index')
            ->with('boletas', $boletas);
    }

    /**
     * Show the form for creating a new boleta.
     *
     * @return Response
     */
    public function create()
    {
        return view('boletas.create');
    }

    /**
     * Store a newly created boleta in storage.
     *
     * @param CreateboletaRequest $request
     *
     * @return Response
     */
    public function store(CreateboletaRequest $request)
    {
        $input = $request->all();

        $path =  "/". $input['a_escolar'] ."/". $input['trimestre'] ."/". \App\Models\seccion::find($input['seccion_id'])->seccion ."/". $this->clean(\App\Models\estudiante::find($input['estudiante_id'])->nombre) ." ". $this->clean(\App\Models\estudiante::find($input['estudiante_id'])->apellido)."-".date('d-M-y-s-m-h') .".". File::extension($request->file('file')->getClientOriginalName());

        \Storage::disk('boleta')->put($path, \File::get($request->file('file')));
        $input['boleta'] = '/documentos/boletas'.$path;
        $boleta = $this->boletaRepository->create($input);

        Flash::success('Boleta creada.');

        return redirect(route('boletas.index'));
    }

    /**
     * Display the specified boleta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $boleta = $this->boletaRepository->findWithoutFail($id);

        if (empty($boleta)) {
            Flash::error('Boleta no encontrada');

            return redirect(route('boletas.index'));
        }

        return view('boletas.show')->with('boleta', $boleta);
    }

    /**
     * Show the form for editing the specified boleta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $boleta = $this->boletaRepository->findWithoutFail($id);

        if (empty($boleta)) {
            Flash::error('Boleta no encontrada');

            return redirect(route('boletas.index'));
        }

        return view('boletas.edit')->with('boleta', $boleta);
    }

    /**
     * Update the specified boleta in storage.
     *
     * @param  int              $id
     * @param UpdateboletaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateboletaRequest $request)
    {
        $boleta = $this->boletaRepository->findWithoutFail($id);

        if (empty($boleta)) {
            Flash::error('Boleta no encontrada');

            return redirect(route('boletas.index'));
        }

/*        if(file_exists(public_path($boleta->boleta)))
          unlink(public_path($boleta->boleta));*/

        $boleta = $this->boletaRepository->update($request->all(), $id);

        Flash::success('Boleta actualizada.');

        return redirect(route('boletas.index'));
    }

    /**
     * Remove the specified boleta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $boleta = $this->boletaRepository->findWithoutFail($id);

        if (empty($boleta)) {
            Flash::error('Boleta no encontrada');

            return redirect(route('boletas.index'));
        }

        $this->boletaRepository->delete($id);

        Flash::success('Boleta eliminada.');

        return redirect(route('boletas.index'));
    }

    function clean($name) {
        $name = str_replace(' ', '-', $name); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $name); // Removes special chars.
    }

}
