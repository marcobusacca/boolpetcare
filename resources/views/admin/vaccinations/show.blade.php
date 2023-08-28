@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    Tipo di vaccino: {{ $vaccination->nome }}
                    <a class="btn btn-primary" href="{{ route('admin.vaccinations.index') }}">Tutti i vaccini</a>
                </div>
            </div>
        </div>
    </div>
@endsection