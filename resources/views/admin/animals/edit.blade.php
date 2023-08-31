@extends('layouts.admin')

@section('content')


<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="p-2 mt-2 text-end">
                <a href="{{route('admin.animals.index')}}" class="btn btn-primary">Tutti gli animali</a>
            </div>
        </div>
        <div class="col-12 mt-5">
            <form action="{{route('admin.animals.update', $animal->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mt-4">
                    <label class="control-label">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="nome" value="{{old('nome') ?? $animal->nome}}" required>
                    @error('nome')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Specie</label>
                    <input type="text" id="specie" name="specie" class="form-control @error('specie') is-invalid @enderror" placeholder="specie" value="{{old('specie') ?? $animal->specie}}" required>
                    @error('specie')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Data di nascita</label>
                    <input type="date" id="data_di_nascita" name="data_di_nascita" class="form-control @error('data_di_nascita') is-invalid @enderror" placeholder="data_di_nascita" value="{{old('data_di_nascita') ?? $animal->data_di_nascita}}" required>
                    @error('data_di_nascita')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Genere</label>
                    <input type="text" id="genere" name="genere" class="form-control @error('genere') is-invalid @enderror" placeholder="genere" value="{{old('genere') ?? $animal->genere}}" required>
                    @error('genere')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Nome del proprietario</label>
                    <input type="text" id="nome_proprietario" name="nome_proprietario" class="form-control @error('nome_proprietario') is-invalid @enderror" placeholder="nome_proprietario" value="{{old('nome_proprietario') ?? $animal->nome_proprietario}}" required>
                    @error('nome_proprietario')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Cognome del proprietario</label>
                    <input type="text" id="cognome_proprietario" name="cognome_proprietario" class="form-control @error('cognome_proprietario') is-invalid @enderror" placeholder="cognome_proprietario" value="{{old('cognome_proprietario') ?? $animal->cognome_proprietario}}" required>
                    @error('cognome_proprietario')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Note aggiuntive</label>
                    <textarea name="note_aggiuntive" id="note_aggiuntive" cols="30" rows="5" class="form-control @error('note_aggiuntive') is-invalid @enderror" placeholder="note_aggiuntive">{{old('note_aggiuntive') ?? $animal->note_aggiuntive}}</textarea>
                    @error('note_aggiuntive')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <span>Seleziona le Vaccinazioni Effettuate:</span>
                    @foreach ($vaccinations as $vaccination)
                        <div class="my-2">
                            @if ($errors->any())
                                <input type="checkbox" name="vaccinations[]" value="{{ $vaccination->id }}" {{ in_array($vaccination->id, old('vaccinations', [])) ? 'checked' : ''}} class="form-check-input @error('vaccinations') is-invalid @enderror">
                            @else
                                <input type="checkbox" name="vaccinations[]" value="{{ $vaccination->id }}" {{ $animal->vaccinations->contains($vaccination) ? 'checked' : ''}} class="form-check-input @error('vaccinations') is-invalid @enderror">
                            @endif
                            <label class="form-check-label">{{ $vaccination->nome }}</label>
                        </div>
                    @endforeach
                    @error('vaccinations')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" form-group mt-2">
                    <button type="submit" class="btn btn-success">Salva</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection