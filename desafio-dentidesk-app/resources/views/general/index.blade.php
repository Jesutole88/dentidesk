@extends('layouts.plantillabase')
@section('contenido')

<div class="col-md-12 mt-4">

    <div class="row">

        <div class="col-md-6 mt-2">

            <div class="col-md-12">
                <div class="row">
                    <h2>Ingresos:</h2>
                </div>
                <a href="ingresos/create" class="btn btn-success btn-sm">Agregar Ingreso</a>
                <div class="table-wrapper-scroll-y my-custom-scrollbar mt-4">
                    <table class="table table-dark table-striped table-bordered table-responsive table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Monto</th>  
                                <th scope="col" colspan="2" class="text-center">Acciones</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos['ingresos'] as $ingreso)
                            <tr>
                                <td>{{$ingreso->fecha}}</td>
                                <td>{{$ingreso->descripcion}}</td>
                                <td>{{$ingreso->monto}}</td>
                                <td><a href="/ingresos/{{$ingreso->id}}/edit" class="btn btn-outline-info btn-sm">Editar</a></td>
                                <td>
                                    <form action="{{ route ('ingresos.destroy',$ingreso->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    
        <div class="col-md-6 mt-2">
    
            <div class="col-md-12">
                <div class="row">
                    <h2>Egresos:</h2>
                </div>
                <a href="egresos/create" class="btn btn-success btn-sm">Agregar Egreso</a>
                <div class="table-wrapper-scroll-y my-custom-scrollbar mt-4">
                    <table class="table table-dark table-striped table-bordered table-responsive table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Monto</th>  
                                <th scope="col" colspan="2" class="text-center">Acciones</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos['egresos'] as $egreso)
                            <tr>
                                <td>{{$egreso->fecha}}</td>
                                <td>{{$egreso->descripcion}}</td>
                                <td>{{$egreso->monto}}</td>
                                <td><a href="/egresos/{{$egreso->id}}/edit" class="btn btn-outline-info btn-sm">Editar</a></td>
                                <td>
                                    <form action="{{ route ('egresos.destroy',$egreso->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</div>
    
@endsection
