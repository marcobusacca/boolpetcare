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
            <!-- disease Infos Table -->
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
                        @foreach ($diseases as $disease)
                            <tr class="text-center">
                                <!-- disease Id -->
                                <td>{{ $disease->id }}</td>
                                <!-- disease Nome -->
                                <td>{{ $disease->nome }}</td>
                                <td>
                                    <!-- disease Show Button -->
                                    <a href="{{ route('admin.diseases.show', $disease) }}" class="btn btn-info mx-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <!-- disease Edit Button -->
                                    <a href="{{ route('admin.diseases.edit', $disease) }}" class="btn btn-warning mx-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- disease Delete Button -->
                                    <form class="disease-delete-button d-inline-block mx-1" data-disease-nome="{{ $disease->nome }}" action="{{ route('admin.diseases.destroy', $disease) }}" method="POST">
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
                            <td colspan="3" class="py-4">
                                <a href="{{ route('admin.diseases.create') }}" class="text-decoration-none">Aggiungi una Nuova Vaccinazione</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection