@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Edit Title With Vaccination Name -->
            <div class="col-6 d-flex justify-content-start align-items-end mt-5">
                <h1>Modifica la Vaccinazione "{{ $vaccination->nome }}"</h1>
            </div>
            <!-- Link To Vaccinations List -->
            <div class="col-6 d-flex justify-content-end align-items-end mt-5">
                <a href="{{ route('admin.vaccinations.index') }}" class="btn btn-primary">Lista Vaccinazioni</a>
            </div>
            <!-- Create Form -->
            <div class="col-12 my-5">
                <form action="{{ route('admin.vaccinations.update', $vaccination) }}" method="POST" class="border p-3 w-100">
                    @csrf
                    @method('PUT')
                    <!-- Vaccination Nome Form Group -->
                    <div class="form-group my-4">
                        <!-- Nome Label -->
                        <label class="control-label">Nome:</label>
                        <!-- Nome Input Text -->
                        <input type="text" name="nome" id="nome" placeholder="Modifica il nome della vaccinazione" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') ?? $vaccination->nome }}" required>
                        <!-- Nome Error Text -->
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Edit Submit Button -->
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button type="submit" class="btn btn-warning fw-bold px-5">MODIFICA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection