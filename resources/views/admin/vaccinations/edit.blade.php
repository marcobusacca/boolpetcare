@extends('layouts.admin')

@section('content')


<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="p-2 mt-2 text-end">
                <a href="{{route('admin.vaccinations.index' )}}" class="btn btn-primary">Tutti i vaccini</a>
            </div>
        </div>
        <div class="col-12 mt-5">
            <form action="{{route('admin.vaccinations.update', $vaccination->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="control-label" >Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="nome" value="{{old('nome') ?? $vaccination->nome}}">
                    @error('nome')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" form-group mt-2">
                    <button type="submit" class="btn btn-success"> Salva</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection