@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">view de Usuarios cadastrados</p>
            <div class="card">
                @foreach ($users as $user)
                <div class="card-body">
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <i class="btn btn-danger text-right">X</i>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection