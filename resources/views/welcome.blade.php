@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <div id="container-search" class="col-md-12">
        <h1>Busque por um Evento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procure um Evento">
        </form>
    </div>
    <div class="row cabecalho">
        <div class="col-md-12 text-left">
            @if($search)
                <a href="/" class="btn btn-danger" id="todos">Ver todos</a>
                <h2 class="titulo">Buscando por: {{$search}}</h2>
            @else
                <h2 class="titulo">Próximos Eventos: </h2>
            @endif
        </div>
    </div>
    <!-- Section-->
    <div class="container">
        <div class="row">
            <div class="col-md-10 eventos">
                @isset($events)
                    @foreach($events as $item)
                        <div class="card" style="width: 18rem;">
                            <img src="/img/events/{{$item->imagem}}" class="card-img-top" alt="{{$item->titulo}}">
                            <div class="card-body">
                                <p class="card-date">{{date('d/m/Y', strtotime($item->data))}}</p>
                                <div class="text-center">
                                    <h5 class="card-title">{{$item->titulo}}</h5>
                                </div>
                                <div class="row">
                                    {{--
                                    <a  href="/events/edit/{{$item->id}}" class="btn btn-primary col-md-4">Editar</a>
                                    --}}
                                    <a  href="/events/{{$item->id}}" class="btn btn-success col-md-4">Mais</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
                <div class="col-md-12 text-center">
                    @if(count($events) == 0 && $search)
                        <p>Não foi possível encontrar nenhum evento com o título {{$search}}! <a href="/">ver todos</a></p>
                    @elseif(count($events) == 0)
                        <p>Não há eventos disponíveis no momento</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
