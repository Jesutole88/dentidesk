<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Egreso extends Model
{
    use HasFactory;

    public static function obtener(){
        $consulta = DB::table('egresos')
                    ->select(DB::raw('MONTH(fecha) as mes_egreso, SUM(monto) as monto_egreso'))
                    ->groupBy('mes_egreso')
                    ->orderBy('mes_egreso')
                    ->get();
        return $consulta;
    }
}
