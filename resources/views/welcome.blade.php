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
                            <img src="/img/event_placeholder.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->titulo}}</h5>
                                <p class="card-text">{{$item->descricao}}</p>
                                @if($item->privado == 1)
                                    Privado
                                @endif
                                @if($item->privado == 0)
                                    Não Privado
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
@endsection
