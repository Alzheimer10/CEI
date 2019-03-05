<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateestudianteRequest;
use App\Http\Requests\UpdateestudianteRequest;
use App\Repositories\estudianteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class estudianteController extends AppBaseController
{
    /** @var  estudianteRepository */
    private $estudianteRepository;

    public function __construct(estudianteRepository $estudianteRepo)
    {
        $this->estudianteRepository = $estudianteRepo;
    }

    /**
     * Display a listing of the estudiante.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estudianteRepository->pushCriteria(new RequestCriteria($request));
        $estudiantes = $this->estudianteRepository->all();

        return view('estudiantes.index')
            ->with('estudiantes', $estudiantes);
    }

    /**
     * Show the form for creating a new estudiante.
     *
     * @return Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created estudiante in storage.
     *
     * @param CreateestudianteRequest $request
     *
     * @return Response
     */
    public function store(CreateestudianteRequest $request)
    {
        $input = $request->all();

        $estudiante = $this->estudianteRepository->create($input);

        Flash::success('El estudiante fue creado.');

        return redirect(route('estudiantes.index'));
    }

    /**
     * Display the specified estudiante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante no encontrado');

            return redirect(route('estudiantes.index'));
        }

        return view('estudiantes.show')->with('estudiante', $estudiante);
    }

    /**
     * Show the form for editing the specified estudiante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante no encontrado');

            return redirect(route('estudiantes.index'));
        }

        return view('estudiantes.edit')->with('estudiante', $estudiante);
    }

    /**
     * Update the specified estudiante in storage.
     *
     * @param  int              $id
     * @param UpdateestudianteRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'fechaNacimiento' => 'required',
            'sexo' => 'required',
            'ci' => 'required|unique:estudiantes,ci,'.$id
        ]);

        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante no encontrado');

            return redirect(route('estudiantes.index'));
        }

        $estudiante = $this->estudianteRepository->update($request->all(), $id);

        Flash::success('Estudiante actualizado correctamente.');

        return redirect(route('estudiantes.index'));
    }

    /**
     * Remove the specified estudiante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);
        if (empty($estudiante)) {
            Flash::error('Estudiante no encontrado');
            return redirect(route('estudiantes.index'));
        }
        $representantes = \App\Models\representante::where('estudiante_id',$id);
        if ( count($representantes->get()) > 0){
            foreach ($representantes->get() as $representante) {
                $representante->delete();
            }
        }
        $this->estudianteRepository->delete($id);

        Flash::success('Estudiante eliminado correctamente');

        return redirect(route('estudiantes.index'));
    }


    /**
     * Display a listing of the estudiante.
     *
     * @param Request $request
     * @return Response
     */
    public function search($string)
    {
       // return \App\Models\estudiante::like('ci', $string)->get();
        return \App\Models\estudiante::orWhere('nombre', 'like', '%' . $string . '%')->orWhere('apellido', 'like', '%' . $string . '%')->limit(5)->get();
    }


    /**
     * @param Request $request
     * @return Response
     */
    public function representante(Request $request)
    {
        if (!empty($request->ci)){
            $order   = array(".", "-", ":");
            $ci = str_replace($order,"", $request->ci);
            $estudiante = \App\Models\estudiante::where('ci','=',$ci);
            if ($estudiante->count() )
                return view('estudiantes.show')->with('estudiante', $estudiante->get()[0]);
        }

        Flash::error('No seleccionado');

        return redirect(route('login'))->withInput()->withErrors(array('ci' => 'Alumno no encontrado'));
    }

    /**
     * Update the specified estudiante in storage.
     *
     * @param  int              $id
     */
    public function approvedAccess($id)
    {
        /** @var estudiante $estudiante */
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante))
            return response()->json(['message' => 'Estudiante no encontrado'], 404); // Status code here

        $estudiante->acceso = !$estudiante->acceso;

        $estudiante->save();

        return 'true';
    }
}
