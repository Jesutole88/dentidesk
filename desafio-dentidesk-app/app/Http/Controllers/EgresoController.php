<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use Illuminate\Http\Request;

class EgresoController extends Controller
{

    public function create()
    {
        return view('egreso.agregar');
    }

    public function store(Request $request)
    {
        $egreso = new Egreso();
        $egreso->fecha = $request->get('fecha');
        $egreso->descripcion = $request->get('descripcion');
        $egreso->monto = $request->get('monto');

        $egreso->save();
        return redirect('/');
    }

    public function edit($id)
    {
        $egreso = Egreso::find($id);
        return view('egreso.editar')->with('egreso',$egreso);
    }

    public function update(Request $request, $id)
    {
        $egreso = Egreso::find($id);
        $egreso->fecha = $request->get('fecha');
        $egreso->descripcion = $request->get('descripcion');
        $egreso->monto = $request->get('monto');

        $egreso->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $egreso = Egreso::find($id);
        $egreso->delete();
        return redirect('/');
    }
}
