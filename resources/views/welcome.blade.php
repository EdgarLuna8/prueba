<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <style>
        html,
        body {
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

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
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
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-borderless card-header-flex">
                            <div class="text-center">
                                <h5 class="mb-0">Crear formulario</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-5">
                                        <form action="{{ route('home.store') }}" enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <div class="controls">
                                                        <input type="hidden" class="form-control" id="id" name="" />
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <div class="controls">
                                                        <label for="name">Nombre</label>
                                                        <input type="text" class="form-control" id="name" name="name"
                                                            placeholder="Nombre" required
                                                            data-validation-required-message="El campo nombre es obligatorio" />
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <div class="controls">
                                                        <label for="phone">Teléfono</label>
                                                        <input type="number" class="form-control" id="phone" name="phone"
                                                            placeholder="Teléfono" required
                                                            data-validation-required-message="El campo Teléfono es obligatorio" />
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <div class="controls">
                                                        <label for="email">Correo Electronico</label>
                                                        <input type="mail" class="form-control" id="email" name="email"
                                                            placeholder="Correo Electronico" min="0" required
                                                            data-validation-required-message="El campo Correo Electronico es obligatorio" />
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <div class="controls">
                                                        <label for="matter">Asunto</label>
                                                        <textarea class="form-control" name="matter" id="matter" cols="30"
                                                            rows="2" placeholder="Escribe tu asunto..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 text-rigth">
                                                    <div class="controls">
                                                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

<script src="{{asset('js/app.js')}}"></script>


</html>
