<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container-fluid p-0" align="center">
            <header class="row">
                @include('includes.header')
            </header>
        </div>
        <br>
        <div class="container" align="center">
            <div class="card" align="center">
                <div class="container pt-3">
                    <a>Você não tem permissão para acessar essa página!</a>
                    <br><br>
                    <a href="{{ url('/') }}" class="btn btn">Voltar</a><br><br>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid p-0" align="center">
            <footer class="row">
                @include('includes.footer')
            </footer>
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
        </div>
    </body>
</html>
