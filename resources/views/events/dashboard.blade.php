@extends('layouts.main')
@section('title', 'dashboard')
@section('content')
<div class="container-fluid dashboard-container">
    <div class="col-md-9">
        <div class="col-md-10 offset-md-1 dashboard-title-container" style="margin-top: 43px;">
            <h1 class="text-lefts" style="font-size: 25px;">Meus Eventos</h1>
        </div>
        <div class="col-md-8 offset-md-1 dashboard-events-container">
            @if(count($events) > 0)
                <table class="table table-striped">
                    <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Participantes</th>
                                <th>Ações</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td scropt="row">{{$loop->index + 1}}</td>
                                <td scropt="row"><a href="/events/{{$event->id}}">{{$event->titulo}}</a></td>
                                <td scropt="row">{{count($event->users)}}</td>
                                <td scropt="row">
                                    <a  href="/events/edit/{{$event->id}}" class="btn btn-primary col-md-4"><ion-icon name="create-outline"></ion-icon></a>
                                    <form action="/events/{{$event->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn col-md-4"><ion-icon name="trash-outline"></ion-icon></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Você ainda não possui eventos, <a href="/events/create">Criar Evento</a></p>
            @endif
        </div>
    </div>

    <div class="col-md-3">
        <div class="col-md-10 offset-md-1 dashboard-title-container" style="margin-top: 10px;">
            <h1 class="text-left" style="font-size: 25px;">Eventos que estou participando</h1>
        </div>
        <div class="col-md-8 offset-md-1 dashboard-events-container">
            @if(count($eventsAs) > 0)
                <table class="table table-striped">
                    <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach($eventsAs as $event)
                            <tr>
                                <td scropt="row">{{$loop->index + 1}}</td>
                                <td scropt="row"><a href="/events/{{$event->id}}">{{$event->titulo}}</a></td>
                                <td scropt="row">
                                    <form action="/events/leave/{{$event->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Você não marcou sua presença em nenhum evento, <a href="/">Vizualizar eventos</a></p>
            @endif
        </div>
    </div>
</div>
@endsection
