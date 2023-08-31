@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="row justify-content-between">
        <div class="col-6 d-flex justify-content-start align-items-end mb-5">
            <h1>Aggiungi una nuova bestia</h1>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-end mb-5">
            <a href="{{route('admin.animals.index')}}" class="btn btn-primary">Tutti gli animali</a>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.animals.store')}}" method="POST">
                @csrf
                <div class="form-group mt-4">
                    <label class="control-label">Nome animale</label>
                    <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Inserisci nome" value="{{ old ('nome')}}" required>
                    @error('nome')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Specie</label>
                    <input type="text" name="specie" id="specie" class="form-control @error('specie') is-invalid @enderror" placeholder="Inserisci specie" value="{{ old('specie')}}" required>
                    @error('specie')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Data di nascita</label>
                    <input type="date" name="data_di_nascita" id="data_di_nascita" class="form-control @error('data_di_nascita') is-invalid @enderror" placeholder="Inserisci data di nascita" value="{{ old('data_di_nascita')}}" required>
                    @error('data_di_nascita')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Genere</label>
                    <input type="text" name="genere" id="genere" class="form-control @error('genere') is-invalid @enderror" placeholder="Inserisci genere" value="{{ old('genere')}}" required>
                    @error('genere')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Nome proprietario</label>
                    <input type="text" name="nome_proprietario" id="nome_proprietario" class="form-control @error('nome_proprietario') is-invalid @enderror" placeholder="Inserisci nome proprietario" value="{{ old('nome_proprietario')}}" required>
                    @error('nome_proprietario')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Cognome proprietario</label>
                    <input type="text" name="cognome_proprietario" id="cognome_proprietario" class="form-control @error('cognome_proprietario') is-invalid @enderror" placeholder="Inserisci cognome proprietario" value="{{ old('cognome_proprietario')}}" required>
                    @error('cognome_proprietario')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>  
                <div class="form-group mt-4">
                    <label class="control-label">Note aggiuntive</label>
                    <textarea name="note_aggiuntive" id="note_aggiuntive" class="form-control @error('note_aggiuntive') is-invalid @enderror" placeholder="Inserisci note aggiuntive">{{ old('note_aggiuntive')}}</textarea>
                    @error('note_aggiuntive')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <span>Seleziona le Vaccinazioni Effettuate:</span>
                        @foreach ($vaccinations as $vaccination)
                            <div class="my-5">
                                <div class="my-2">
                                    <!-- VACCINATION CHECKBOX -->
                                    <input type="checkbox" name="vaccinations[]" value="{{ $vaccination->id }}" {{ in_array($vaccination->id, old('vaccinations', [])) ? 'checked' : ''}} class="form-check-input @error('vaccinations') is-invalid @enderror">
                                    <!-- VACCINATION LABEL -->
                                    <label class="form-check-label">{{ $vaccination->nome }}</label>
                                </div>
                                <div class="my-2">
                                    <!-- DATE OF VACCINATION LABEL -->
                                    <label class="form-check-label">Data di Vaccinazione:</label>
                                    <!-- DATE OF VACCINATION INPUT -->
                                    <input type="date" name="data_di_vaccinazione[]" id="data_di_vaccinazione_{{$vaccination->nome}}" class="form-control @error('data_di_vaccinazione') is-invalid @enderror" placeholder="Inserisci data di vaccinazione" value="{{ old('data_di_vaccinazione')}}">
                                    <!-- DATE OF VACCINATION ERROR -->
                                    @error('data_di_vaccinazione')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="my-2">
                                    <!-- DOSAGE OF VACCINATION LABEL -->
                                    <label class="form-check-label">Dosaggio della Vaccinazione:</label>
                                    <!-- DOSAGE OF VACCINATION INPUT -->
                                    <input type="text" name="dosaggio[]" id="dosaggio" class="form-control @error('dosaggio') is-invalid @enderror" placeholder="Inserisci il dosaggio" value="{{ old('dosaggio')}}">
                                    <!-- DOSAGE OF VACCINATION ERROR -->
                                    @error('dosaggio')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="my-2">
                                    <!-- NOTES OF VACCINATION LABEL -->
                                    <label class="form-check-label">Note Aggiuntive:</label>
                                    <!-- NOTES OF VACCINATION TEXTAREA -->
                                    <textarea name="note_vaccino[]" id="note_vaccino" class="form-control @error('note_vaccino') is-invalid @enderror" placeholder="Inserisci note aggiuntive">{{ old('note_vaccino')}}</textarea>
                                    <!-- NOTES OF VACCINATION ERROR -->
                                    @error('note_vaccino')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        @endforeach
                        @error('vaccinations')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center my-5">
                    <button class="btn btn-success fw-bold px-5" type="submit">CREA</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection