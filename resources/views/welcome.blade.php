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
                    <div class="row">
                        <div class="col-md-6">
                            <tr>
                                <td>Nome: <strong>{{ $user->name }}</strong></td> <br>
                                <td>Telefone: <strong>{{ $user->phone }}</strong></td>
                            </tr>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('details', $user->id) }}"><i class="btn btn-warning">Detalhes</i></a> 
                        </div> 
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection