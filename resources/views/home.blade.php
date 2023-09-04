@extends('layouts.app')

@section('content')
<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="px-3" style="color: #23B5BF"><strong>BOOLPETCARE</strong></h1>
                <p style="font-size: 30px"><strong>Utilizza il tuo gestionale</strong></p>
                <a class="btn text-white my-4" style="background-color:#23B5BF" href="{{ url('admin') }}"><strong>{{__('Dashboard')}}</strong></a>
                <div>
                    <img src="https://www.big-brokers.com/wp-content/uploads/2018/11/202201_rc_veterinario.jpg" alt="home-background" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection