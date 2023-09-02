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
                        <input type="date" name="data_di_nascita" id="data_di_nascita" placeholder="Inserisci data di nascita" class="form-control @error('data_di_nascita') is-invalid @enderror" value="{{ old('data_di_nascita') }}" required>
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
                        <input type="text" name="genere" id="genere" placeholder="Inserisci genere" class="form-control @error('genere') is-invalid @enderror" value="{{ old('genere') }}" required>
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
                        <textarea name="note_aggiuntive" id="note_aggiuntive" placeholder="Inserisci note aggiuntive" class="form-control @error('note_aggiuntive') is-invalid @enderror">{{ old('note_aggiuntive') }}</textarea>
                        <!-- Note Aggiuntive Error Text -->
                        @error('note_aggiuntive')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Animal Vaccination Form Group -->
                    {{-- <div class="form-group my-4">
                        <!-- Animal Vaccination Label -->
                        <span>Seleziona le Vaccinazioni Effettuate:</span>
                        <!-- Animal Vaccination ForEach -->
                        @foreach ($vaccinations as $vaccination)
                            <div class="mb-5">
                                <!-- Vaccination CheckBox Form Group -->
                                <div class="my-2">
                                    <!-- Vaccination CheckBox -->
                                    <input type="checkbox" name="vaccinations[]" class="form-check-input @error('vaccinations') is-invalid @enderror" value="{{ $vaccination->id }}" {{ in_array($vaccination->id, old('vaccinations', [])) ? 'checked' : '' }}>
                                    <!-- Vaccination Label -->
                                    <label class="form-check-label">{{ $vaccination->nome }}</label>
                                </div>
                                <!-- Data Di Vaccinazione Form Group -->
                                <div class="my-2">
                                    <!-- Data Di Vaccinazione Label -->
                                    <label class="form-check-label">Data di Vaccinazione:</label>
                                    <!-- Data Di Vaccinazione Input Date -->
                                    <input type="date" name="data_di_vaccinazione[]" placeholder="Inserisci data di vaccinazione" class="form-control @error('data_di_vaccinazione') is-invalid @enderror">
                                    <!-- Data Di Vaccinazione Error Text -->
                                    @error('data_di_vaccinazione')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Dosaggio Form Group -->
                                <div class="my-2">
                                    <!-- Dosaggio Label -->
                                    <label class="form-check-label">Dosaggio della Vaccinazione:</label>
                                    <!-- Dosaggio Input Text -->
                                    <input type="text" name="dosaggio[]" placeholder="Inserisci il dosaggio" class="form-control @error('dosaggio') is-invalid @enderror">
                                    <!-- Dosaggio Error Text -->
                                    @error('dosaggio')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Note Del Vaccino Form Group -->
                                <div class="my-2">
                                    <!-- Note Del Vaccino Label -->
                                    <label class="form-check-label">Note Aggiuntive:</label>
                                    <!-- Note Del Vaccino TextArea -->
                                    <textarea name="note_vaccino[]" placeholder="Inserisci note aggiuntive" class="form-control @error('note_vaccino') is-invalid @enderror"></textarea>
                                    <!-- Note Del Vaccino Error Text -->
                                    @error('note_vaccino')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        @endforeach
                        <!-- Vaccination CheckBox Error Text -->
                        @error('vaccinations')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    <!-- Create Submit Button -->
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button type="submit" class="btn btn-success fw-bold px-5">CREA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection