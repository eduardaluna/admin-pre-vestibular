<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container-fluid p-0 justify-content-center">
            <header class="row">
                @include('includes.header')
            </header>
        </div>
        <br>
        <div class="container justify-content-center">
            <div class="card justify-content-center">
                <h3>Professores</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            @foreach($professores as $professor)
                                <table class="table table-bordered justify-content-center">
                                    <thead>
                                        <tr>
                                            <th>Nome Completo</th>
                                            <th>E-mail</th>
                                            <th>Telefone</th>
                                            <th>Data de Nascimento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$professor->nome}}</td>
                                            <td>{{$professor->email}}</td>
                                            <td>{{$professor->telefone}}</td>
                                            <td>{{Carbon\Carbon::parse($professor->data_nascimento)->format('d/m/Y')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{url('/editar/professor/'.$professor->id)}}" class="btn btn-primary">Editar</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{url('/remover/professor/'.$professor->id)}}" class="btn btn-primary">Remover</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{url('/admin/visualizar/professor/'.$professor->id)}}" class="btn btn-primary">Visualizar</a>
                                    </div>
                                </div>
                                <br><br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid p-0 justify-content-center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
