<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{

    public function create()
    {
        return view('ingreso.agregar');
    }

    public function store(Request $request)
    {
        $ingreso = new Ingreso();
        $ingreso->fecha = $request->get('fecha');
        $ingreso->descripcion = $request->get('descripcion');
        $ingreso->monto = $request->get('monto');

        $ingreso->save();
        return redirect('/');
    }

    public function edit($id)
    {
        $ingreso = Ingreso::find($id);
        return view('ingreso.editar')->with('ingreso',$ingreso);
    }

    public function update(Request $request, $id)
    {
        $ingreso = Ingreso::find($id);
        $ingreso->fecha = $request->get('fecha');
        $ingreso->descripcion = $request->get('descripcion');
        $ingreso->monto = $request->get('monto');

        $ingreso->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $ingreso = Ingreso::find($id);
        $ingreso->delete();
        return redirect('/');
    }
}
