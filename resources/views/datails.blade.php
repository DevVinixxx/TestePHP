@extends('layouts.main')
@section('title', $user->name)
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h3>Title</h3>
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->cpf }}</p>
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->phone }}</p>
                    <p>{{ $user->street }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection