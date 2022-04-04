@extends('layouts.plantillabase')
@section('contenido')

<div class="col-md-12">

    <div class="row">

        <div class="offset-md-3 col-md-6 offset-md-3 mt-4">
            <h2>Editar Ingreso</h2>
        </div>

        <div class="offset-md-3 col-md-6 offset-md-3mt-4">
            <form action="/ingresos/{{$ingreso->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" value="{{$ingreso->fecha}}" tabindex="1" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea type="text" name="descripcion" id="descripcion" class="form-control" tabindex="2" maxlength="50" required>{{$ingreso->descripcion}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="monto" class="form-label">Monto</label>
                    <input type="number" name="monto" id="monto" step="any" min="1.00" pattern="^[0-9]+" value="{{$ingreso->monto}}"  class="form-control" tabindex="1" required>
                </div>
                <a href="/" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-success">Editar</button>
            </form>
        </div>

    </div>

</div>
    
@endsection