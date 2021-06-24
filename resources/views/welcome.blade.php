@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <div class="container">
        <div class="row cabecalho">
            <div class="col-md-12 text-center">
                <h2 class="titulo">Listagem de Eventos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 eventos">
                @isset($events)
                    @foreach($events as $item)
                        <div class="card" style="width: 18rem;">
                            <img src="/img/events/{{$item->imagem}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-date">{{date('d/m/Y', strtotime($item->data))}}</p>
                                <h5 class="card-title">{{$item->titulo}}</h5>
                                <div class="row">
                                    <a  href="/events/edit/{{$item->id}}" class="btn btn-primary col-md-4">Editar</a>
                                    &nbsp;
                                    <a  href="/events/{{$item->id}}" class="btn btn-success col-md-4">Mais</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
                @if(count($events) == 0)
                    <p>Não há eventos disponíveis no momento</p>
                @endif
            </div>
        </div>
    </div>
@endsection
