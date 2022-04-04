<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use App\Models\Ingreso;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index()
    {
        $ingresos = Ingreso::all();
        $egresos = Egreso::all();
        $datos = ['ingresos' => $ingresos, 'egresos' => $egresos];
        return view('general.index')->with('datos',$datos);
    }

}
