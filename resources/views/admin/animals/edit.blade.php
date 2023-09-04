@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Edit Title With Animal Name -->
            <div class="col-6 d-flex justify-content-start align-items-end mt-5">
                <h1>Modifica l'Animale "{{ $animal->nome }}"</h1>
            </div>
            <!-- Link To Animals List -->
            <div class="col-6 d-flex justify-content-end align-items-end mt-5">
                <a href="{{ route('admin.animals.index') }}" class="btn btn-info btn-bool-pet-care">Lista Animali</a>
            </div>
            <!-- Create Form -->
            <div class="col-12 my-5">
                <form action="{{ route('admin.animals.update', $animal) }}" method="POST" class="border p-3 w-100">
                    @csrf
                    @method('PUT')
                    <!-- Animal Nome Form Group -->
                    <div class="form-group my-4">
                        <!-- Nome Label -->
                        <label class="control-label">Nome:</label>
                        <!-- Nome Input Text -->
                        <input type="text" name="nome" id="nome" placeholder="Modifica il nome dell'animale" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') ?? $animal->nome }}" required>
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
                        <input type="date" name="data_di_nascita" id="data_di_nascita" class="form-control @error('data_di_nascita') is-invalid @enderror" value="{{ old('data_di_nascita') ?? $animal->data_di_nascita }}" required>
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
                        <input type="text" name="genere" id="genere" placeholder="Modifica il genere" class="form-control @error('genere') is-invalid @enderror" value="{{ old('genere') ?? $animal->genere }}" required>
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
                        <textarea name="note_aggiuntive" id="note_aggiuntive" placeholder="Modifica le note aggiuntive dell'animale" class="form-control @error('note_aggiuntive') is-invalid @enderror">{{ old('note_aggiuntive') ?? $animal->note_aggiuntive }}</textarea>
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
                                @if ($errors->any())
                                    <!-- Vaccination CheckBox -->
                                    <input type="checkbox" name="vaccinations[]" class="form-check-input @error('vaccinations') is-invalid @enderror" value="{{ $vaccination->id }}" {{ in_array($vaccination->id, old('vaccinations', [])) ? 'checked' : '' }}>
                                @else
                                    <!-- Vaccination CheckBox -->
                                    <input type="checkbox" name="vaccinations[]" class="form-check-input @error('vaccinations') is-invalid @enderror" value="{{ $vaccination->id }}" {{ $animal->vaccinations->contains($vaccination) ? 'checked' : ''}}>
                                @endif
                                <!-- Vaccination Label -->
                                <label class="form-check-label">{{ $vaccination->nome }}</label>
                            </div>
                        @endforeach
                        <!-- Vaccination CheckBox Error Text -->
                        @error('vaccinations')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Disease Vaccination Form Group -->
                    <div class="form-group my-4">
                        <!-- Disease Vaccination Label -->
                        <span>Seleziona le Malattie dell'Animale:</span>
                        <!-- Disease Vaccination ForEach -->
                        @foreach ($diseases as $disease)
                            <!-- Disease CheckBox Form Group -->
                            <div class="my-2">
                                @if ($errors->any())
                                    <!-- Disease CheckBox -->
                                    <input type="checkbox" name="diseases[]" class="form-check-input @error('diseases') is-invalid @enderror" value="{{ $disease->id }}" {{ in_array($disease->id, old('diseases', [])) ? 'checked' : '' }}>
                                @else
                                    <!-- Disease CheckBox -->
                                    <input type="checkbox" name="diseases[]" class="form-check-input @error('diseases') is-invalid @enderror" value="{{ $disease->id }}" {{ $animal->diseases->contains($disease) ? 'checked' : ''}}>
                                @endif
                                <!-- Disease Label -->
                                <label class="form-check-label">{{ $disease->nome }}</label>
                            </div>
                        @endforeach
                        <!-- Disease CheckBox Error Text -->
                        @error('diseases')
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