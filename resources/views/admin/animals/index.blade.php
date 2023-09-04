@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Index Title -->
            <div class="col-3 d-flex justify-content-start align-items-end my-5">
                <h1>Lista Animali</h1>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="form-group">
                    <form method="get" action="search" class="d-flex justify-content-start align-items-center my-5">
                        <input class="form-control border-none" name="search" placeholder="Ricerca..." value="{{ isset($search) ? $search : '' }}">
                        <button type="submit" class="btn btn-info btn-bool-pet-care border-none mx-2">Ricerca</button>
                    </form>
                </div>
            </div>
            <!-- Link To Dashboard -->
            <div class="col-3 d-flex justify-content-end align-items-center my-5">
                <a href="{{ Route('admin.dashboard') }}" class="btn btn-info btn-bool-pet-care">Dashboard</a>
            </div>
            <!-- Delete Confirm Message -->
            @if (session('message'))
                <div class="col-12 mt-5">
                    <div class="alert alert-success">
                        <span>{{ session('message') }}</span>
                    </div>
                </div>
            @endif
            <!-- Animals Infos Table -->
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
                                <!-- Animal Id -->
                                <td>{{ $animal->id }}</td>
                                <!-- Animal Nome -->
                                <td>{{ $animal->nome }}</td>
                                <!-- Animal Data Di Nascita -->
                                <td>{{ $animal->data_di_nascita }}</td>
                                <td>
                                    <!-- Animal Show Button -->
                                    <a href="{{ route('admin.animals.show', $animal) }}" class="btn btn-info mx-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <!-- Animal Edit Button -->
                                    <a href="{{ route('admin.animals.edit', $animal) }}" class="btn btn-warning mx-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- Animal Delete Button -->
                                    <form class="animal-delete-button d-inline-block mx-1" data-animal-nome="{{ $animal->nome }}" action="{{ route('admin.animals.destroy', $animal) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <!-- Animal Create Button -->
                        <tr class="text-center">
                            <td colspan="4" class="py-4">
                                <a href="{{ route('admin.animals.create') }}" class="text-decoration-none">Aggiungi un Nuovo Animale</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.partials.modal_animal_delete');
@endsection