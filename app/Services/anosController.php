<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\ano;
class anosController 
{
    public function Anos() {
		$año = date('Y');
		$años = array();
		for ($i=0; $i < 20; $i++) { 
			$años[date('Y')-$i] = date('Y')-$i;
		}
		return $años;
    }
}
