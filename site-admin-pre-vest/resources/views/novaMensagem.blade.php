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
            <form method="POST" action="{{url('/mensagem/nova')}}">
                @csrf
                <div class="card justify-content-center">
                    <h3>Enviar Mensagem</h3>
                    <div class="container pt-3 justify-content-center">
                        <div class="row">
                            <div class="col">
                                <label for="remetente" class="col-form-label text-md-right">Seu Nome</label>
                                <input id="remetente" type="text" class="form-control @error('remetente') is-invalid @enderror" name="remetente" value="{{old('remetente')}}" required autofocus/>
                                @error('remetente')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <label for="email" class="col-form-label text-md-right">Seu E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autofocus/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="conteudo" class="col-form-label text-md-right">Mensagem</label><br>
                                <textarea id="conteudo" name="conteudo" rows="8" cols="60"></textarea>
                                @error('conteudo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="row justify-content-center">
                        <input type="submit" class="btn btn-primary" value="Enviar" />
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="container-fluid p-0 justify-content-center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
