@extends('layouts.main')
@section('title', 'HDC Events | Produtos')
@section('content')
   <div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="imagem-container" class="col-md-6">
            <img class="img-fluid" src="/img/events/{{$event->imagem}}" alt="{{$event->titulo}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->titulo}}</h1>
            <div id="outline">
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{$event->local}}</p>
                <p class="events-participantes"><ion-icon name="people-outline"></ion-icon>{{count($event->users)}}</p>
            </div>
            <p class="event-owner"><ion-icon name="person-outline"></ion-icon>Dono do Evento: {{$eventUser['name']}}</p>
            <p class="event-descricao col-md-12">{{$event->descricao}}</p>
            @if(!$hasUserJoined)
                <form action="/events/join/{{$event->id}}" method="POST">
                    @csrf
                    <a href="/events/join/{{$event->id}}" class="btn btn-primary" id="event-submit"
                    onclick="event.preventDefault();
                    this.closest('form').submit();"
                    >Confirmar Presença</a>
                </form>
            @else
                <p class="already-joined-msg">Já está participando do evento</p>
            @endif
            <p>INFRA</p>
            <p>
            @foreach(json_decode($event->itens) as $item)
                <li><ion-icon name="play-outline"></ion-icon><span>{{$item}}</span></li>
            @endforeach

            </p>
        </div>
    </div>
   </div>
@endsection
