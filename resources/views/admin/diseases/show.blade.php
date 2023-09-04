@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Disease Nome -->
            <div class="col-6 d-flex justify-content-start align-items-end my-5">
                <h1>{{ $disease->nome }}</h1>
            </div>
            <!-- Link To Disease List -->
            <div class="col-6 d-flex justify-content-end align-items-end my-5">
                <a href="{{ Route('admin.diseases.index') }}" class="btn btn-info btn-bool-pet-care">Lista Malattie</a>
            </div>
            <!-- Create, Edit Confirm Message -->
            @if (session('message'))
                <div class="col-12 mt-5">
                    <div class="alert alert-success">
                        <span>{{ session('message') }}</span>
                    </div>
                </div>
            @endif
            <div class="col-12 mb-5">
                <!-- Show Card -->
                <div class="card w-100">
                    <div class="card-body">
                        <!-- Disease Nome -->
                        <div class="my-5">
                            <!-- Nome Label -->
                            <label class="fw-bold">Nome:</label>
                            <!-- Nome Content -->
                            <span class="py-2">{{ $disease->nome }}</span>
                        </div>
                        <!-- Diseases Animals -->
                        <div class="my-5 text-center">
                            <div class="row justify-content-center">
                                @if (count($disease->animals) == 0)
                                    <span>Nessun Animale con la Malattia "{{ $disease->nome }}"</span>
                                @else
                                    <!-- Diseases Animals Label -->
                                    <label class="fw-bold">Animali con la Malattia "{{ $disease->nome }}":</label>
                                    <!-- List of Animals -->
                                    @foreach ($disease->animals as $animal)
                                        <div class="col-4 p-4">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <!-- Animal Nome -->
                                                    <h5 class="card-title">{{ $animal->nome }}</h5>
                                                    <!-- Animal Genere -->
                                                    <p class="card-text">{{ $animal->genere }}</p>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <a href="{{ route('admin.animals.show', $animal) }}" class="btn btn-info btn-bool-pet-care">Informazioni Animale</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection