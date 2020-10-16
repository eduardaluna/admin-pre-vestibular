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
        <h3 align="center">Lista de Turmas</h3>
        <div class="container pt-3">
            <div class="row">
                <div class="col">
                    @foreach($turmas as $turma)
                    <table class="table table-borderless", align="center">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data de Início</th>
                            <th>Data de Término</th>
                            <th>Horário</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$turma->nome}}</td>
                                <td>{{Carbon\Carbon::parse($turma->dataInicio)->format('d/m/Y')}}</td>
                                <td>{{Carbon\Carbon::parse($turma->dataFim)->format('d/m/Y')}}</td>
                                <td>{{$turma->horario}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col">
                            <a href="{{url('/editar/turma/'.$turma->id)}}" class="btn btn-primary">Editar</a>
                        </div>
                        <div class="col">
                            <a href="{{url('/remover/turma/'.$turma->id)}}" class="btn btn-primary">Remover</a>
                        </div>
                        <div class="col">
                            <a href="{{url('/admin/visualizar/turma/'.$turma->id)}}" class="btn btn-primary">Visualizar</a>
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
<div class="container-fluid p-0" align="center">
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
