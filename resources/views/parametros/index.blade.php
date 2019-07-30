@extends('layout.base');

@section('content')
        <div class="row">
            <div class="col">
                <h1>Parámetros</h1>
                <a href="/parametro/create" class="btn btn-primary">Nuevo Parámetro</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PAIS</th>
                            <th>Precio Venta</th>
                            <th>Precio Carga</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($parametro as $parametro0)
                        <tr>
                            <td>{{$parametro0->id}}</td>
                            <td>{{$parametro0->pais}}</td>
                            <td>{{$parametro0->precio_envio}}</td>
                            <td>{{$parametro0->precio_carga}}</td>
                            <td>
                                <a href="/parametro/{{$parametro0->id}}/edit" class='btn btn-primary'><i class="fas fa-edit"></i></a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>


@endsection('content')

    
