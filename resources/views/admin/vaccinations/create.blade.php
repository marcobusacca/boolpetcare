@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="row justify-content-between">
        <div class="col-6 d-flex justify-content-start align-items-end mb-5">
            <h1>Aggiungi una nuova vaccinazione</h1>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-end mb-5">
            <a href="{{route('admin.vaccinations.index' )}}" class="btn btn-primary">Tutte le vaccinazioni</a>
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
            <form action="{{ route('admin.vaccinations.store')}}" method="POST">
                @csrf
                <div class="form-group mt-4">
                    <label class="control-label">Nome vaccinazione</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Inserisci nome vaccinazione" value="{{ old ('nome')}}">

                </div>
                <div class="col-12 d-flex justify-content-center align-items-center my-5">
                    <button class="btn btn-success fw-bold px-5" type="submit">CREA</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection