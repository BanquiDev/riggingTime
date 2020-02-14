<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rigging Time</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="../css/riggingtime.css">
        <!-- Styles -->

    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <!-- <div class="main">
                <div class="titulo">
                  <h1>  RIGGING TIME </h1>
                </div> -->
               <div class="barra">
                 <nav class='barradenav'>
                  <ul>
                    <li><a href="/quienessomos">Quienes Somos</a></li>
                    <li><a href="/servicios">Servicios</a></li>
                    <li><a id='trabajos' href="/trabajos">Trabajos Realizados</a></li>
                    <li><a id='clientes' href="/clientes">Nuestros Clientes</a></li>
                    <li><a href="/staff">Staff</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                  </ul>
                </nav>
                </div>
                  <div class="logo">
                    <img src="img/rigging_time.jpg" alt="">
                  </div>
                <div class="fotos">
                    <div class="fotoizq">
                    <img src="img/IMG-20191220-WA0019.jpg" alt="">
                  </div>
                  <div class="fotoder">
                    <img src="img/IMG-20191220-WA0024.jpg" alt="">
                  </div>
                  <div class="fotoabajoizq">
                    <img src="img/20191030_172039.jpg" alt="">
                  </div>
                  <div class="fotoabajoder">
                    <img src="img/IMG-20160320-WA0006.jpg" alt="">
                  </div>
                </div>
            </div>

    </body>
</html>
