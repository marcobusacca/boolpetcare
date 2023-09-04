@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Edit Title With Disease Name -->
            <div class="col-6 d-flex justify-content-start align-items-end mt-5">
                <h1>Modifica la Malattia "{{ $disease->nome }}"</h1>
            </div>
            <!-- Link To Diseases List -->
            <div class="col-6 d-flex justify-content-end align-items-end mt-5">
                <a href="{{ route('admin.diseases.index') }}" class="btn btn-info btn-bool-pet-care">Lista Malattie</a>
            </div>
            <!-- Create Form -->
            <div class="col-12 my-5">
                <form action="{{ route('admin.diseases.update', $disease) }}" method="POST" class="border p-3 w-100">
                    @csrf
                    @method('PUT')
                    <!-- Disease Nome Form Group -->
                    <div class="form-group my-4">
                        <!-- Nome Label -->
                        <label class="control-label">Nome:</label>
                        <!-- Nome Input Text -->
                        <input type="text" name="nome" id="nome" placeholder="Modifica il nome della malattia" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') ?? $disease->nome }}" required>
                        <!-- Nome Error Text -->
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Edit Submit Button -->
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button type="submit" class="btn btn-info btn-bool-pet-care fw-bold px-5">MODIFICA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection