@extends('layouts.app')

@section('meta')
<meta name="description" content="Envia tu dinero, carga y paga tus facturas sin salir de Queens.">
<meta name="keywords" content="MULTILATINO, New, York, Queens, Envios, Carga, Dinero, México, Colombia">
@endsection

@section('content')
<div class="container">
    
        <div class="row">
            <div class="col text-center">
                <h2>CONOCE NUESTRAS TARIFAS DEL DÍA</h2>
            </div>
        </div>
        <div class="row  ">
            <div class="col text-center text-md-left">
                <h4>Tarifas de envío de dinero </h4>
            </div>
        </div>

        <div class="row mt-2">


                <div class="col-12 col-md-5  mb-2">
                    <div class="card redondeado-arriba redondeado-abajo shadow h-100 ">
                        <img class="card-img-top redondeado-arriba" src="img/colombia1.jpg" alt="Card image cap">
                        <div class="card-body bmulti redondeado-abajo">
                          <h5 class="card-title">Envío de dinero a Colombia</h5>
                          <p>Envía <strong>1 Dólar </strong> Recibe <strong>{{$colombia->precio_envio}} Pesos </strong></p>
                          <button class="btn btn-multi btn-block redondeado shadow" type="submit"><strong>¿Cuánto dinero quieres enviar?</strong></button>
                        </div>
                        
                     </div>
                </div>

                <div class="col-12 col-md-5 offset-md-2">
                    <div class="card redondeado-arriba redondeado-abajo shadow h-100 " >
                        <img class="card-img-top redondeado-arriba" src="img/mexico1.jpg" alt="Card image cap">
                        <div class="card-body bmulti redondeado-abajo">
                          <h5 class="card-title">Envío de dinero a México</h5>
                          <p>Envía <strong>1 Dólar </strong> Recibe <strong>{{$mexico->precio_envio}} Pesos </strong></p>
                          <button class="btn btn-multi btn-block redondeado shadow" type="submit"><strong>¿Cuánto dinero quieres enviar?</strong></button>
                        </div>
                    </div>
                </div>


        </div>
    
        <div class="row mt-5">
            <div class="col text-center text-md-left">
                <h4>Tarifas de envío de carga </h4>
            </div>
        </div>
    
        <div class="row mb-5 mt-2">


                <div class="col-12 col-md-5 mb-2">
                    <div class="card redondeado-arriba redondeado-abajo shadow h-100" >
                        <img class="card-img-top redondeado-arriba" src="img/colombia1.jpg" alt="Card image cap">
                        <div class="card-body bmulti redondeado-abajo">
                          <h5 class="card-title">Envío de carga a Colombia</h5>
                          <p>Envía <strong>Una Libra </strong> por <strong>{{$colombia->precio_carga}} Dólar </strong></p>
                          <button class="btn btn-multi btn-block redondeado shadow" type="submit"><strong>¿Cuántas libras quieres enviar?</strong></button>
                        </div>
                      </div>
                </div>
            

                <div class="col-12 col-md-5 offset-md-2">
                    <div class="card redondeado-arriba redondeado-abajo shadow h-100" >
                        <img class="card-img-top redondeado-arriba" src="img/mexico1.jpg" alt="Card image cap">
                        <div class="card-body bmulti redondeado-abajo">
                          <h5 class="card-title">Envío de carga a México</h5>
                          <p>Envía <strong>Una Libra </strong> por <strong>{{$colombia->precio_carga}} Dólar </strong></p>
                          <button class="btn btn-multi btn-block redondeado shadow" type="submit"><strong>¿Cuántas libras quieres enviar?</strong></button>
                        </div>
                        
                    </div>
                </div>


        </div>
    
        <div class="row mb-5 mt-2">
            <h3 class=" text-center">
            ¿Necesitas más información acerca de envíos de carga o dinero desde Queens?
            Haz <a href="#"  ><strong> click aquí</strong> </a> y chatea con un asesor de Multilatino NY.
            </h3>
        </div>
    
    
    
</div>
@endsection
