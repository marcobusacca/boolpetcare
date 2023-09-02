@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Index Title -->
            <div class="col-6 d-flex justify-content-start align-items-end my-5">
                <h1>Lista Animali</h1>
            </div>
            <!-- Link To Dashboard -->
            <div class="col-6 d-flex justify-content-end align-items-end my-5">
                <a href="{{ Route('admin.dashboard') }}" class="btn btn-primary">Dashboard</a>
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
                            <td colspan="4" class="py-4">
                                <a href="{{ route('admin.animals.create') }}" class="text-decoration-none">Aggiungi un Nuovo Animale</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- @include('admin.partials.modal_animal_delete'); --}}
@endsection