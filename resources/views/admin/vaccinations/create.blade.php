@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Create Title -->
            <div class="col-6 d-flex justify-content-start align-items-end mt-5">
                <h1>Aggiungi una Nuova Vaccinazione</h1>
            </div>
            <!-- Link To Vaccinations List -->
            <div class="col-6 d-flex justify-content-end align-items-end mt-5">
                <a href="{{ route('admin.vaccinations.index') }}" class="btn btn-primary">Lista Vaccinazioni</a>
            </div>
            <!-- Create Form -->
            <div class="col-12 my-5">
                <form action="{{ route('admin.vaccinations.store') }}" method="POST" class="border p-3 w-100">
                    @csrf
                    <!-- Vaccination Nome Form Group -->
                    <div class="form-group my-4">
                        <!-- Nome Label -->
                        <label class="control-label">Nome:</label>
                        <!-- Nome Input Text -->
                        <input type="text" name="nome" id="nome" placeholder="Inserisci il nome della vaccinazione" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required>
                        <!-- Nome Error Text -->
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Create Submit Button -->
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button class="btn btn-success fw-bold px-5" type="submit">CREA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection