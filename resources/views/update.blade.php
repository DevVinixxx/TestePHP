@extends('layouts.main')
@section('title', 'Atualizar Cadastro')
@section('content')
<div class="container">
    <h1>Atualizar Dados</h1>
    <form action="#" class="form" method="POST">
        @csrf
        @include('_partials.form')
    </form>
</div>
@endsection