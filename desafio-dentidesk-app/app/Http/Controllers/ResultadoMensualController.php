<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use App\Models\Ingreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class ResultadoMensualController extends Controller
{

    public function index()
    {
        $ingresos = Ingreso::obtener();
        $egresos  = Egreso::obtener();
        $datos = [];

        foreach ($ingresos as $ingreso) {
            $mes_ingreso = $ingreso->mes_ingreso;
             
            foreach ($egresos as $egreso) {
                $mes_egreso = $egreso->mes_egreso;
           
                if ($mes_egreso == $mes_ingreso){
                    
                    $mes_nombre = $this->meses($mes_egreso);
           
                    $total_ingreso  = $ingreso->monto_ingreso;
                    $total_egreso = $egreso->monto_egreso;
                    $total_ganancia = $ingreso->monto_ingreso-$egreso->monto_egreso;
                    
                    array_push($datos,array(
                        'mes_nombre'=> $mes_nombre,
                        'total_ingreso'=> $total_ingreso,
                        'total_egreso'=> $total_egreso,
                        'Total_ganancia'=> $total_ganancia,
                    ));
                    
                }
            }
            
        }

        return view('general.resultadoMensual')->with('datos',$datos);
    }


    public function meses($num)
    {
        $mes = '';

        switch ($num) {
            case '1':
                $mes = 'Enero';
                break;
            case '2':
                $mes = 'Febrero';
                break;
            case '3':
                $mes = 'Marzo';
                break;
            case '4':
                $mes = 'Abril';
                break;
            case '5':
                $mes = 'Mayo';
                break;
            case '6':
                $mes = 'Junio';
                break;
            case '7':
                $mes = 'Julio';
                break;
            case '8':
                $mes = 'Agosto';
                break;
            case '9':
                $mes = 'Septiembre';
                break;
            case '10':
                $mes = 'Octubre';
                break;
            case '11':
                $mes = 'Noviembre';
                break;
            case '12':
                $mes = 'Diciembre';
                break;
            default:
         
                break;
        }

        return $mes;

    }


}
