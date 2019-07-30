<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @yield('meta')
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Custom fonts for this theme -->
    <link href="{{ asset('dist/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    
        
     
    <!-- Styles  -->
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    
    <!-- Scroll -->
    <script src="js/smooth-scroll.min.js"></script>
    <script>
      smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 500, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function ( anchor, toggle ) {} // Function to run after scrolling
      });
       
    </script>
         

    <title>Multilatino NY</title>
  </head>
  <body>
      
    <div id="header_multilatino" >
        
        <nav class="navbar fixed-top navbar-expand-lg blanco-trans">
            <div class="container">
                <a data-scroll class="navbar-brand  ml-lg-4" href="{{ url('/') }}#header_multilatino"><img src="img/logoMultilatinoNY.png" class="img-fluid" alt="Logo Multilatino NY"></a>
                <button class="navbar-toggler bmulti" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
                </button>
                
                <div class="collapse navbar-collapse mr-4" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto ">
                    <li class="nav-item dropdown drop">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <strong> Enviar dinero a </strong>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Colombia</a>
                        <a class="dropdown-item" href="#">México</a>
                        <!--<div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        -->
                      </div>
                    </li>
                    <li class="nav-item dropdown drop">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <strong>  Enviar carga a </strong>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Colombia</a>
                        <a class="dropdown-item" href="#">México</a>
                        <!--<div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        -->
                      </div>
                    </li>
                  </ul>

                </div>
            </div>
        </nav>
        
    </div>
      
      <section id="main-head" >
          <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/colombia1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/mexico1.jpg" alt="Second slide">
                  </div>
                </div>
              <div class="first-action">
                  
                  <div class="row text-left ">
                      <div class="col col-md-8 col-lg-6 col-xl-4 offset-md-1 offset-xl-2 ">
                        <div class="intro-text left-0 bg-faded p-5 bmulti shadow redondeado-arriba redondeado-abajo" >
                          <h1>En Multilatino NY</h1>
                          <p>
                              Envío de dinero o carga a Colombia, México y Centro América ¡Sin salir de Queens! 
                          </p>
                          <div class="input-group shadow">
                              <div class="input-group-append">
                                  <button class="btn btn-multi-light redondeado-izquierda " type="submit"><strong>Hoy quiero</strong></button>
                              </div>
                            <!--<input type="text" class="form-control" placeholder="Dirección de correo electrónico" aria-label="" aria-describedby="basic-addon1">-->
                            <select class="form-control" >
                                <option>Seleccionar</option>
                                <option>Enviar dinero a Colombia</option>
                                <option>Enviar dinero a México</option>
                                <option>Enviar carga a Colombia</option>
                                <option>Enviar carga a México</option>
                            </select>
                              
                          </div>
                          <div class="form-group mt-3 mb-0">
                              <a data-scroll  href="#main" class="btn btn-multi redondeado shadow " ><strong>Conocer información y tarifas <i class="fas fa-caret-right"></i></strong> </a>
                          </div>
                          
                        </div>
                      </div>
                  </div>
                  
              </div>
          
           </div>
      </section>
      
      <section id="main" class="mt-md-5" >
          <div class="d-none d-md-block">
          </br>
          </br>
          </div>
          
            @yield('content')
    </section>
      
      
      <div id="footer" >
          
          <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-5 ">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p><strong>ENCUÉNTRANOS A TAN SÓLO 5 MINUTOS DE LA QUEENS BULEVAR</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2006.682541333589!2d-73.87376893912197!3d40.73402544540495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25e5acc96389f%3A0x2bb269be17eb098d!2sQueens+Blvd%2C+Queens%2C+NY%2C+EE.+UU.!5e0!3m2!1ses!2sco!4v1564377081924!5m2!1ses!2sco" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 col-md-6  mt-5">
                    <p>
                        <strong>Síguenos en :</strong>
                        <img src="/img/facebook-multilatino-ny.png" alt="Logo facebook multilatino">
                        <img src="/img/instagram-multilatino-ny.png" alt="Logo instagram multilatino">
                    </p>
                    <p><strong>¿Necesitas más información acerca de envíos de carga o dinero desde Queens ?</strong></p>
                    <div class="input-group">
                      <input type="email" class="form-control" placeholder="Dirección de correo electrónico" aria-label="" aria-describedby="basic-addon1">
                      <div class="input-group-append">
                          <button class="btn btn-multi redondeado-derecha" type="submit"><strong>Suscribirme</strong></button>
                      </div>
                    </div>
                </div>
            </div>
          
          
      
      
            
            <div class="col d-none d-md-block">
                <ul class="nav justify-content-end ">
                    <li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Enviar dinero a 
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Colombia</a>
                        <a class="dropdown-item" href="#">México</a>
                        <!--<div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        -->
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Enviar carga a 
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Colombia</a>
                        <a class="dropdown-item" href="#">México</a>
                        <!--<div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        -->
                      </div>
                    </li>

                </ul>
              </div>
              <div class="col mt-2">
                <small>© 2019 Multilatino NY. Todos los derechos reservados</small>
            </div>
          </div>
      </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}" ></script>
    
  </body>
</html>
