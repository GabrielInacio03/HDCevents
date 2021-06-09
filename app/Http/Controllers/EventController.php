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

        return redirect('/');
    }

}
