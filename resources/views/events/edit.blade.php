@extends('layouts.main')
@section('title', 'HDC Events | Produtos')
@section('content')
    <div class="container">
        <div class="row cabecalho">
            <div class="col-md-12 text-center">
                <h2 class="titulo">Editar Evento</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 eventos">
                <form class="col-md-12 forms" action="/events/edit/{{$event->id}}" method="POST">
                <!-- diretiva do blade -->
                {{ csrf_field() }}
                {!! method_field('PUT') !!}
                    <div class="col-md-4 ">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$event->titulo}}" required>
                    </div>
                    <div class="col-md-4 campos">
                        <label for="local" class="form-label">Local</label>
                        <input type="text" class="form-control" id="local" name="local"  value="{{$event->local}}" required>
                    </div>
                    <div class="col-md-3 campos">
                        <label for="privado" class="form-label">Privado</label>
                        <select name="privado" id="privado" class="form-select">
                            <option value='sim'
                                @if($event->privado == 1)
                                    selected
                                @endif
                            >Sim</option>
                            <option value='nao'
                                @if($event->privado == 0)
                                    selected
                                @endif
                            >Não</option>
                        </select>
                    </div>
                    <div class="col-md-12 ">
                        <label for="descricao" class="form-label">Descrição</label><br>
                        <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control">{{$event->descricao}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <input type="File" id="imagem" name="imagem" class="form-control">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
