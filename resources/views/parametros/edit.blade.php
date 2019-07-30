@extends('layout.base');

@section('content')
        <div class="row">
            <div class="col">
                <a href="/parametro" class="btn btn-secondary">Volver</a><h1>Editar {{$parametro_edit->pais}}</h1>
                <form action="/parametro/{{$parametro_edit->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="pais">Pais : </label>
                      <input type="text" class="form-control" id="pais" name="pais" value="{{$parametro_edit->pais}}" readonly="">
                      <label for="precio_envio">Precio Envío : </label>
                      <input type="text" class="form-control" id="precio_envio" name='precio_envio' value="{{$parametro_edit->precio_envio}}" required="">
                      <label for="pais">Precio Carga : </label>
                      <input type="text" class="form-control" id="precio_carga" name='precio_carga' value="{{$parametro_edit->precio_carga}}" required="">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </div>
        </div>
@endsection('content')

    
