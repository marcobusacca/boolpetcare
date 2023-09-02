@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-6 d-flex justify-content-start align-items-end mb-5">
                <h1>Lista Vaccini</h1>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vaccinations as $vaccination)
                            <tr class="text-center">
                                <td>{{ $vaccination->id }}</td>
                                <td>{{ $vaccination->nome }}</td>
                                <td class="d-flex justify-content-end">
                                    <a href="{{ route('admin.vaccinations.show', $vaccination) }}" class="btn btn-info mx-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.vaccinations.edit', $vaccination) }}" class="btn btn-warning mx-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
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
                        <tr class="text-center">
                            <td colspan="5" class="py-4">
                                <a href="{{ route('admin.vaccinations.create') }}" class="text-decoration-none">Aggiungi una nuova vaccinatione</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.partials.modal_vaccination_delete');
@endsection