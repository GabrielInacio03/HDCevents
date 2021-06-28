@extends('layouts.main')
@section('title', 'HDC Events | Produtos')
@section('content')
    <div class="col-md-6 offset-md-3" id="event-create-container">
        <div class="row cabecalho">
            <div class="col-md-12 text-center">
                <h2 class="titulo">Criar Evento</h2>
            </div>
        </div>
        <form action="/events" method="POST" enctype="multipart/form-data" style="margin-bottom:.5em;">
        <!-- diretiva do blade -->
        @csrf
            <div class="form-group">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="data" class="form-label">Data do Evento</label>
                <input type="date" class="form-control" id="data" name="data" >
            </div>
            <div class="form-group">
                <label for="local" class="form-label">Local</label>
                <input type="text" class="form-control" id="local" name="local" required>
            </div>
            <div class="form-group">
                <label for="privado" class="form-label">Privado</label>
                <select name="privado" id="privado" class="form-select">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descricao" class="form-label">Descrição</label><br>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
            </div><br>
            <div class="form-group">
                <input type="file" id="imagem" name="imagem" class="form-control">
            </div>
            <div class="form-group">
                <div class="text-center">
                    <br>
                    <label for="title">Adicione itens de infraestrutura:</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Cerveja grátis"> Cerveja grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Open Food"> Open food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Brindes"> Brindes
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Criar Evento">
            </div>
        </form>
    </div>
@endsection
