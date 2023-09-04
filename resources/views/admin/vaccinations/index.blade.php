@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Index Title -->
            <div class="col-6 d-flex justify-content-start align-items-end my-5">
                <h1>Lista Vaccini</h1>
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
            <!-- Vaccination Infos Table -->
            <div class="col-12">
                <table class="table table-striped border">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vaccinations as $vaccination)
                            <tr class="text-center">
                                <!-- Vaccination Id -->
                                <td>{{ $vaccination->id }}</td>
                                <!-- Vaccination Nome -->
                                <td>{{ $vaccination->nome }}</td>
                                <td>
                                    <!-- Vaccination Show Button -->
                                    <a href="{{ route('admin.vaccinations.show', $vaccination) }}" class="btn btn-info mx-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <!-- Vaccination Edit Button -->
                                    <a href="{{ route('admin.vaccinations.edit', $vaccination) }}" class="btn btn-warning mx-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- Vaccination Delete Button -->
                                    <form class="vaccination-delete-button d-inline-block mx-1" data-vaccination-nome="{{ $vaccination->nome }}" action="{{ route('admin.vaccinations.destroy', $vaccination) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <!-- Vaccination Create Button -->
                        <tr class="text-center">
                            <td colspan="3" class="py-4">
                                <a href="{{ route('admin.vaccinations.create') }}" class="text-decoration-none">Aggiungi una Nuova Vaccinazione</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.partials.modal_vaccination_delete');
@endsection