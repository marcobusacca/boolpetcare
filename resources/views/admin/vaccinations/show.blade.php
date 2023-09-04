@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Vaccination Nome -->
            <div class="col-6 d-flex justify-content-start align-items-end my-5">
                <h1>{{ $vaccination->nome }}</h1>
            </div>
            <!-- Link To Vaccinations List -->
            <div class="col-6 d-flex justify-content-end align-items-end my-5">
                <a href="{{ Route('admin.vaccinations.index') }}" class="btn btn-primary">Lista Vaccinazioni</a>
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
                        <!-- Vaccination Nome -->
                        <div class="my-5">
                            <!-- Nome Label -->
                            <label class="fw-bold">Nome:</label>
                            <!-- Nome Content -->
                            <span class="py-2">{{ $vaccination->nome }}</span>
                        </div>
                        <!-- Vaccinations Animals -->
                        <div class="my-5 text-center">
                            <div class="row justify-content-center">
                                @if (count($vaccination->animals) == 0)
                                    <span>Nessun Animale Vaccinato con il Vaccino "{{ $vaccination->nome }}"</span>
                                @else
                                    <!-- Vaccinations Animals Label -->
                                    <label class="fw-bold">Animali Vaccinati con il Vaccino "{{ $vaccination->nome }}":</label>
                                    <!-- List of Animals -->
                                    @foreach ($vaccination->animals as $animal)
                                        <div class="col-4 p-4">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <!-- Animal Nome -->
                                                    <h5 class="card-title">{{ $animal->nome }}</h5>
                                                    <!-- Animal Genere -->
                                                    <p class="card-text">{{ $animal->genere }}</p>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <a href="{{ route('admin.animals.show', $animal) }}" class="btn btn-primary">Informazioni Animale</a>
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