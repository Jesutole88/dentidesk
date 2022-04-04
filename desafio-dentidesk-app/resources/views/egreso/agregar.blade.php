@extends('layouts.plantillabase')
@section('contenido')

<div class="col-md-12">

    <div class="row">

        <div class="offset-md-3 col-md-6 offset-md-3 mt-4">
            <h2>Agregar Nuevo Egreso</h2>
        </div>

        <div class="offset-md-3 col-md-6 offset-md-3mt-4">
            <form action="/egresos" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" tabindex="1" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea type="text" name="descripcion" id="descripcion" class="form-control" tabindex="2" placeholder="Agrega una descripción" maxlength="50" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="monto" class="form-label">Monto</label>
                    <input type="number" name="monto" id="monto" step="any" min="1.00" pattern="^[0-9]+" value="0.00" class="form-control" tabindex="1" required>
                </div>
                <a href="/" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-success">Agregar</button>
            </form>
        </div>

    </div>

</div>
    
@endsection