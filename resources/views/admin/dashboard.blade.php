@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-3 color">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
                <div class="position-sticky">
                    <div class="list-group list-group-flush mt-4">
                        <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple fw-bold text-white"
                        aria-current="true" style="background-color: #23B5BF">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                        </a>
                        <a href="{{ route('admin.animals.index') }}" class="list-group-item list-group-item-action py-2 ripple fw-bold text-white" style="background-color: #23B5BF">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Animali</span>
                        </a>
                        <a href="{{ route('admin.vaccinations.index') }}" class="list-group-item list-group-item-action py-2 ripple fw-bold text-white" style="background-color: #23B5BF">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span>Vaccinazioni</span>
                        </a>
                        <a href="{{ route('admin.diseases.index') }}" class="list-group-item list-group-item-action py-2 ripple fw-bold text-white" style="background-color: #23B5BF">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span>Malattie</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-9 p-5">
            <div class="card">
                <div class="card-header">{{ __('La tua Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Hai effettuato il login correttamente!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
