<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ingreso extends Model
{
    use HasFactory;

    public static function obtener(){
        $consulta = DB::table('ingresos')
                    ->select(DB::raw('MONTH(fecha) as mes_ingreso, SUM(monto) as monto_ingreso'))
                    ->groupBy('mes_ingreso')
                    ->orderBy('mes_ingreso')
                    ->get();
        return $consulta;
    }
}
