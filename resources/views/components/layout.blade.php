<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Avaliação de Atendimento" }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="app" class="container">
        <form {{ $method ?? "GET" }}
        @if (isset($action))
            action="{{ route($action) }}"
        @endif
        >
            <div class="form-group">
                <div class="form-title">
                    <label for="title" class="title">PESQUISA DE SATISFAÇÃO</label>
                </div>

                <div class="page active" id="page-1">
                    <div class="form-content">

                        {{ $slot }}

                    </div>
                </div>
            </div>
        </form>

        <div class="icons">
            <div class="icon-secretaria">
                <img src="{{ asset('assets/img/secretaria.png') }}" alt="">
            </div>

            <div class="icon-prefeitura">
                <img src="{{ asset('assets/img/prefeitura.png') }}" alt="">
            </div>

            <div class="icon-sus">
                <img src="{{ asset('assets/img/sus.png') }}" alt="">
            </div>
        </div>
    </div>


</body>

</html>
