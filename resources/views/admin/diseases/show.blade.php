@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- disease Nome -->
            <div class="col-6 d-flex justify-content-start align-items-end my-5">
                <h1>{{ $disease->nome }}</h1>
            </div>
            <!-- Link To disease List -->
            <div class="col-6 d-flex justify-content-end align-items-end my-5">
                <a href="{{ Route('admin.diseases.index') }}" class="btn btn-primary">Lista Malsttie</a>
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
                        <!-- disease Nome -->
                        <div class="my-5">
                            <!-- Nome Label -->
                            <label class="fw-bold">Nome:</label>
                            <!-- Nome Content -->
                            <span class="py-2">{{ $disease->nome }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection