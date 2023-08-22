@extends('layouts.admin')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="p-2 mt-2 text-end">
                <a href="{{route('admin.animals.index' )}}" class="btn btn-primary"> Tutti gli animali</a>
            </div>
        </div>
        <div class="col-12 mt-5">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{route('admin.animals.update', $animal->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="control-label" >Nome</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="name" value="{{old('nome') ?? $animal->nome}}">
                </div>
              
                <div class="form-group">
                    <label class="control-label" >Specie</label>
                    <input type="text" id="specie" name="specie" class="form-control" placeholder="specie" value="{{old('specie') ?? $animal->specie}}">
                </div>
                <div class="form-group">
                    <label class="control-label" >Data di nascita</label>
                    <input type="text" id="data_di_nascita" name="data_di_nascita" class="form-control" placeholder="data_di_nascita" value="{{old('data_di_nascita') ?? $animal->data_di_nascita}}">
                </div>
                <div class="form-group">
                    <label class="control-label" >Genere</label>
                    <input type="text" id="genere" name="genere" class="form-control" placeholder="genere" value="{{old('genere') ?? $animal->genere}}">
                </div>
                <div class="form-group">
                    <label class="control-label" >Nome del proprietario</label>
                    <input type="text" id="nome_proprietario" name="nome_proprietario" class="form-control" placeholder="nome_proprietario" value="{{old('nome_proprietario') ?? $animal->nome_proprietario}}">
                </div>
                <div class="form-group">
                    <label class="control-label" >Cognome del proprietario</label>
                    <input type="text" id="cognome_proprietario" name="cognome_proprietario" class="form-control" placeholder="cognome_proprietario" value="{{old('cognome_proprietario') ?? $animal->cognome_proprietario}}">
                </div>
                <div class="form-group">
                    <label class="control-label" >Cognome del proprietario</label>
                    <input type="text" id="cognome_proprietario" name="cognome_proprietario" class="form-control" placeholder="cognome_proprietario" value="{{old('cognome_proprietario') ?? $animal->cognome_proprietario}}">
                </div>
                <div class="form-group">
                    <label class="control-label" >Note aggiuntive</label>
                    <textarea name="note_aggiuntive" id="note_aggiuntive" cols="30" rows="5" class="form-control" placeholder="note_aggiuntive">{{old('note_aggiuntive') ?? $animal->note_aggiuntive}}</textarea>
                </div>
                <div class=" form-group mt-2">
                    <button type="submit" class="btn btn-success"> Salva</button>
                </div>
            </form>

        </div>
          

    </div>
</div>
@endsection