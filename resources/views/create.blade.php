@extends('layouts.main')

@section('title', 'Cadastro')
    
@section('content')
<div class="container">
    <h1>Cadastro de Usuario</h1>
    <form action="{{route('store')}}" method="post" class="form" >
        @csrf
        @include('_partials.form')
    </form>
</div>
@endsection