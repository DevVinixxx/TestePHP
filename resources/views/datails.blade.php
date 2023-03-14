@extends('layouts.main')
@section('title', $user->name)
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h3>Title</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>nome</strong>: {{ $user->name }}</p>
                            <p><strong>cpf</strong>: {{ $user->cpf }}</p>
                            <p><strong>email</strong>: {{ $user->email }}</p>
                            <p><strong>phone</strong>: {{ $user->phone }}</p>
                            <p><strong>rua</strong>: {{ $user->street }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>bairro</strong>: {{ $user->neighborhood }}</p>
                            <p><strong>numero</strong>: {{ $user->number }}</p>
                            <p><strong>cep</strong>: {{ $user->zip_code }}</p>
                            <p><strong>cidade</strong>: {{ $user->city }}</p>
                            <p><strong>estado</strong>: {{ $user->state }}</p>
                        </div>
                    </div>
                    <a href="{{ route('details', $user->id) }}" class="btn btn-warning">Editar dados</a>
                    <form action="{{ route('delete', $user->id) }}" method="post" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir Usuario</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@endsection