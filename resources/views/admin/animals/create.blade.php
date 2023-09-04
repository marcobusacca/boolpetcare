@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Create Title -->
            <div class="col-6 d-flex justify-content-start align-items-end mt-5">
                <h1>Aggiungi un Nuovo Animale</h1>
            </div>
            <!-- Link To Animals List -->
            <div class="col-6 d-flex justify-content-end align-items-end mt-5">
                <a href="{{ route('admin.animals.index') }}" class="btn btn-primary">Lista Animali</a>
            </div>
            <!-- Create Form -->
            <div class="col-12 my-5">
                <form action="{{ route('admin.animals.store') }}" method="POST" class="border p-3 w-100">
                    @csrf
                    <!-- Animal Nome Form Group -->
                    <div class="form-group my-4">
                        <!-- Nome Label -->
                        <label class="control-label">Nome:</label>
                        <!-- Nome Input Text -->
                        <input type="text" name="nome" id="nome" placeholder="Inserisci il nome dell'animale" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required>
                        <!-- Nome Error Text -->
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Animal Data Di Nascita Form Group -->
                    <div class="form-group my-4">
                        <!-- Data Di Nascita Label -->
                        <label class="control-label">Data di nascita:</label>
                        <!-- Data Di Nascita Input Date -->
                        <input type="date" name="data_di_nascita" id="data_di_nascita" class="form-control @error('data_di_nascita') is-invalid @enderror" value="{{ old('data_di_nascita') }}" required>
                        <!-- Data Di Nascita Error Text -->
                        @error('data_di_nascita')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Animal Genere Form Group -->
                    <div class="form-group my-4">
                        <!-- Genere Label -->
                        <label class="control-label">Genere:</label>
                        <!-- Genere Input Text -->
                        <input type="text" name="genere" id="genere" placeholder="Inserisci il genere" class="form-control @error('genere') is-invalid @enderror" value="{{ old('genere') }}" required>
                        <!-- Genere Error Text -->
                        @error('genere')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Animal Note Aggiuntive Form Group -->
                    <div class="form-group my-4">
                        <!-- Note Aggiuntive Label -->
                        <label class="control-label">Note aggiuntive:</label>
                        <!-- Note Aggiuntive TextArea -->
                        <textarea name="note_aggiuntive" id="note_aggiuntive" placeholder="Inserisci le note aggiuntive dell'animale" class="form-control @error('note_aggiuntive') is-invalid @enderror">{{ old('note_aggiuntive') }}</textarea>
                        <!-- Note Aggiuntive Error Text -->
                        @error('note_aggiuntive')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Animal Vaccination Form Group -->
                    <div class="form-group my-4">
                        <!-- Animal Vaccination Label -->
                        <span>Seleziona le Vaccinazioni Effettuate:</span>
                        <!-- Animal Vaccination ForEach -->
                        @foreach ($vaccinations as $vaccination)
                            <!-- Vaccination CheckBox Form Group -->
                            <div class="my-2">
                                <!-- Vaccination CheckBox -->
                                <input type="checkbox" name="vaccinations[]" class="form-check-input @error('vaccinations') is-invalid @enderror" value="{{ $vaccination->id }}" {{ in_array($vaccination->id, old('vaccinations', [])) ? 'checked' : '' }}>
                                <!-- Vaccination Label -->
                                <label class="form-check-label">{{ $vaccination->nome }}</label>
                            </div>
                        @endforeach
                        <!-- Vaccination CheckBox Error Text -->
                        @error('vaccinations')
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