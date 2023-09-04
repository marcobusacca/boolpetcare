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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection