<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;

class reporteController extends Controller
{
	public function reporte(){
		$pdf = \PDF::loadView('reportes.reporteAll', ['estudiantes'=> estudiante::orderBy('apellido', 'asc')->get()]);
		return $pdf->stream('Reporte'.date('Y-m-d').'.pdf');
	}
}
