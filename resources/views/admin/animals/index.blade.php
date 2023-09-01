@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-6 d-flex justify-content-start align-items-end mb-5">
                <h1>Lista Animali</h1>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-end mb-5">
                <a href="{{ Route('admin.dashboard') }}" class="btn btn-primary">Dashboard</a>
            </div>
            <div class="col-12">
                <table class="table table-striped border">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data di Nascita</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                            <tr class="text-center">
                                <td>{{ $animal->id }}</td>
                                <td>{{ $animal->nome }}</td>
                                <td>{{ $animal->data_di_nascita }}</td>
                                <td>
                                    <a href="{{ route('admin.animals.show', $animal) }}" class="btn btn-info mx-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.animals.edit', $animal) }}" class="btn btn-warning mx-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="animal-delete-button d-inline-block mx-1" data-animal-nome="{{ $animal->nome }}" action="{{ route('admin.animals.destroy', $animal) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare questo Animale?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr class="text-center">
                            <td colspan="5" class="py-4">
                                <a href="{{ route('admin.animals.create') }}" class="text-decoration-none">Aggiungi un Nuovo Animale</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection