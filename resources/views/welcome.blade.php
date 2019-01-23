<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Servicio Trejo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
        @yield('estilos')

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title  {
                font-size: 84px;
                color: #FFF;
                font-weight: 900;
            }

            .subtitle{
             font-weight: 900;   
            }

            .links > a {
                color: #FFF;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 900;                
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }         
            body{
                background-image: url({{asset('imagenes/fondo2.jpg')}});
            }
            .container{
                background-color: rgba(129,129,133,0.8);
                border: 1px solid #696969;
                
            }     
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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
            @endif   
<div class="container">
            <div class="content">
                <div class="title m-b-md">
                    Servicio Trejo
                    <h3 class="subtitle">Mantenimiento de Equipos y Sistemas de comuto</h3>
                </div>

                <div class="links">
                    <a href="https://laravel-news.com">Nosotros</a>
                    <a href="https://laravel.com/docs">Productos</a>
                    <a href="https://laracasts.com">Servicios</a>                    
                    <a href="https://nova.laravel.com">Contacto</a>
                    
                </div>
            </div>
    </div>
    
        </div>
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       
    </body>
</html>
