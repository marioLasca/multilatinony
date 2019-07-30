@extends('layout.base');

@section('content')
        <div class="row">
            <div class="col">
                <a href="/parametro" class="btn btn-secondary">Volver</a><h1>Nuevos Parámetros</h1>
                <form action="/parametro" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="pais">Pais : </label>
                      <input type="text" class="form-control" id="pais" name="pais" >
                      <label for="precio_envio">Precio Envío : </label>
                      <input type="text" class="form-control" id="precio_envio" name='precio_envio' >
                      <label for="pais">Precio Carga : </label>
                      <input type="text" class="form-control" id="precio_carga" name='precio_carga'>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </div>
        </div>
@endsection('content')

    
