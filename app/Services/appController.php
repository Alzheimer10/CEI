<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\grado;
use App\Models\boleta;
use App\Models\representante;
use App\Models\seccion;
use App\User;

class appController 
{
	//ARRAY DE LOS ULTIMOS 20AÑOS.
    public function Anos() {
		$año = date('Y');
        $años = array();
        for ($i=0; $i < 20; $i++) { 
            //$años[$año-$i .' - '. $año-$i+1] = $año-$i .' - '. $año-$i+1;
            $aux = (string)$año-$i .'-'.(string)($año-($i-1));
			$años[$aux] = $aux;
		}
		return $años;
    }

    public function countEstudiantes() {
		return  Estudiante::all()->count();
    }

    public function countGrados() {
		return  Grado::all()->count();
    }

    public function countSecciones() {
		return Seccion::all()->count();
    }
    
    public function countBoletas() {
		return Boleta::all()->count();
    }

    public function countRepresantes() {
		return Representante::all()->count();
    }

    public function countUsers() {
		return User::all()->count();
    }

    public function selectEstudiantes() {
        return Estudiante::all()->select('id','nombre','apellido');
    }
}
