@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifa il tuo indirizzo E-Mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Un nuovo link di verifica è stato inviato al tuo indirizzo E-Mail.') }}
                    </div>
                    @endif

                    {{ __('Prima di procedere, perfavore verifica la tua mail con il link che ti abbiamo inviato') }}
                    {{ __('Se non hai ricevuto nessuna mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clicka qui per richiederne una nuova') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
