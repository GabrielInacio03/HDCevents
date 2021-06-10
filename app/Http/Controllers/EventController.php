<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('welcome', compact('events'));
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $event = new Event;
        $event->titulo = $request->titulo;
        $event->descricao = $request->descricao;
        $event->local = $request->local;
        $event->privado = $request->privado;
        $event->privado = ($event->privado == "sim"? 1:0);
        $event->save();

        //Flash Messages
        return redirect('/')->with('msg', 'Evento criado com sucesso');
    }

    public function edit($id){
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id){
        $event = Event::find($id);
        $event->titulo = $request->input('titulo');
        $event->descricao = $request->input('descricao');
        $event->local = $request->input('local');
        $event->privado = $request->input('privado');
        $event->privado = ($event->privado == "sim"? 1:0);

        $event->save();
        return redirect('/');
    }

}
