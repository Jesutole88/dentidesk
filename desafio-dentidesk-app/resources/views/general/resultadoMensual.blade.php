@extends('layouts.plantillabase')
@section('contenido')

<div class="col-md-12 mt-4">

    <div class="row">
    
        <div class="col-md-12 mt-4">
            <div class="row">
                <div class="col-md-4">
                    <h2>Ingresos y Egresos:</h2>
                </div>
                <div class="offset-md-6 col-md-2">
                    <a href="/" class="btn btn-success btn-sm">Volver</a>
                </div>
            </div>
            <div class="row">
                <div class="mt-4">
                    <table class="table table-dark table-striped table-bordered table-responsive table-sm">
                        <thead>
                            <tr>
                                <th></th>
                                @foreach ($datos as $dato)
                                    <th scope="col">{{$dato['mes_nombre']}}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total Ingresos</td>
                                @foreach ($datos as $dato)
                                    <td>{{$dato['total_ingreso']}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>Total Egresos</td>
                                @foreach ($datos as $dato)
                                    <td>{{$dato['total_egreso']}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>Total Ganancia Mes</td>
                                @foreach ($datos as $dato)
                                    <td>{{$dato['Total_ganancia']}}</td>
                                @endforeach
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
    
@endsection
