@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">view de Usuarios cadastrados</p>
            @include('_partials.form')
        </div>
    </div>
</div>
@endsection