@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Animal Nome -->
            <div class="col-6 d-flex justify-content-start align-items-end my-5">
                <h1>{{ $animal->nome }}</h1>
            </div>
            <!-- Link To Animals List -->
            <div class="col-6 d-flex justify-content-end align-items-end my-5">
                <a href="{{ Route('admin.animals.index') }}" class="btn btn-info btn-bool-pet-care">Lista Animali</a>
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
                        <!-- Animal Nome -->
                        <div class="my-5">
                            <!-- Nome Label -->
                            <label class="fw-bold">Nome:</label>
                            <!-- Nome Content -->
                            <span class="py-2">{{ $animal->nome }}</span>
                        </div>
                        <!-- Animal Data Di Nascita -->
                        <div class="my-5">
                            <!-- Data Di Nascita Label -->
                            <label class="fw-bold">Data di Nascita:</label>
                            <!-- Data Di Nascita Content -->
                            <span class="d-inline-block">{{ $animal->data_di_nascita }}</span>
                        </div>
                        <!-- Animal Genere -->
                        <div class="my-5">
                            <!-- Genere Label -->
                            <label class="fw-bold">Genere:</label>
                            <!-- Genere Content -->
                            <span class="d-inline-block">{{ $animal->genere }}</span>
                        </div>
                        <!-- Animal Note Aggiuntive -->
                        @if ($animal->note_aggiuntive)
                            <div class="my-5">
                                <!-- Note Aggiuntive Label -->
                                <label class="fw-bold">Note Aggiuntive:</label>
                                <!-- Note Aggiuntive Content -->
                                <p class="d-inline-block">{{ $animal->note_aggiuntive }}</p>
                            </div>
                        @endif
                        <!-- Animal Vaccinations -->
                        <div class="my-5">
                            @if (count($animal->vaccinations) == 0)
                                <span>Nessuna Vaccinazione Registrata</span>
                            @else
                                <!-- Vaccinations Label -->
                                <label class="fw-bold">Vaccinazioni:</label>
                                <!-- List of Vaccinations -->
                                @foreach ($animal->vaccinations as $vaccination)
                                    <a href="{{ route('admin.vaccinations.show', $vaccination) }}" class="btn btn-sm btn-info btn-bool-pet-care mx-1">{{ $vaccination->nome }}</a>
                                @endforeach
                            @endif
                        </div>
                        <!-- Animal Diseases -->
                        <div class="my-5">
                            @if (count($animal->diseases) == 0)
                                <span>Nessuna Malattia Registrata</span>
                            @else
                                <!-- Diseases Label -->
                                <label class="fw-bold">Malattie:</label>
                                <!-- List of Diseases -->
                                @foreach ($animal->diseases as $disease)
                                    <a href="{{ route('admin.diseases.show', $disease) }}" class="btn btn-sm btn-info btn-bool-pet-care mx-1">{{ $disease->nome }}</a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection