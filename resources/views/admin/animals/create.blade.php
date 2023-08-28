@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="row justify-content-between">
        <div class="col-6 d-flex justify-content-start align-items-end mb-5">
            <h1>Aggiungi una nuova bestia</h1>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-end mb-5">
            <a href="{{route('admin.animals.index' )}}" class="btn btn-primary">Tutti gli animali</a>
        </div>
        <div class="col-12 mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-12">
            <form action="{{ route('admin.animals.store')}}" method="POST">
                @csrf
                <div class="form-group mt-4">
                    <label class="control-label">Nome animale</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Inserisci nome" value="{{ old ('nome')}}">

                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Specie</label>
                    <input type="text" name="specie" id="specie" class="form-control" placeholder="Inserisci specie">{{ old('specie')}}

                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Data di nascita</label>
                    <input type="text" name="data_di_nascita" id="data_di_nascita" class="form-control" placeholder="Inserisci data di nascita">{{ old('data_di_nascita')}}

                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Genere</label>
                    <input type="text" name="genere" id="genere" class="form-control" placeholder="Inserisci genere">{{ old('genere')}}

                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Nome proprietario</label>
                    <input type="text" name="nome_proprietario" id="nome_proprietario" class="form-control" placeholder="Inserisci nome proprietario">{{ old('nome_proprietario')}}

                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Cognome proprietario</label>
                    <input type="text" name="cognome_proprietario" id="cognome_proprietario" class="form-control" placeholder="Inserisci cognome proprietario">{{ old('cognome_proprietario')}}

                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Note aggiuntive</label>
                    <textarea name="note_aggiuntive" id="note_aggiuntive" class="form-control" placeholder="Inserisci note aggiuntive">{{ old('note_aggiuntive')}}</textarea>

                </div>
                <div class="col-12 d-flex justify-content-center align-items-center my-5">
                    <button class="btn btn-success fw-bold px-5" type="submit">CREA</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection