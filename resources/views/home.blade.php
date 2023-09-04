@extends('layouts.app')

@section('content')
<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="px-3" style="color: #23B5BF"><strong>BOOLPETCARE</strong></h1>
                <p style="font-size: 30px"><strong>Utilizza il tuo gestionale</strong></p>
                <a class="btn btn-sm text-white" style="background-color:#23B5BF" href="{{ url('admin') }}"><strong>{{__('Dashboard')}}</strong></a>
            </div>
        </div>
    </div>
</div>
@endsection