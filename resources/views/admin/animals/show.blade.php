@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                Paziente n°{{$animal['id']}}
                <a class="btn btn-primary" href="{{url('admin/animals')}}">Tutti gli animali</a>
            </div>
            <div class="card-body">
                <div class="card-title d-flex">
                    <h5>{{$animal['nome']}}</h5>  <p class="card-text px-2">{{$animal['specie']}}</p>

                </div>
                <p class="card-text">Nato il: {{$animal['data_di_nascita']}}</p>
                <p class="card-text">Genere: {{$animal['genere']}}</p>
                <p class="card-text">Proprietario: {{$animal['nome_proprietario']}} {{$animal['cognome_proprietario']}}</p>
                <label for="note">Note:</label>
                <p name="note" class="card-text">{{$animal['note_aggiuntive']}}</p>
                <a href="#" class="btn btn-primary">Cartella Clinica</a>
            </div>
        </div>
    </div>
</div>
@endsection