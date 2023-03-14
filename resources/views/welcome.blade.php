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
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        </div>
                        <div class="col-md-6">
                        <a href="{{ route('show', $user->id) }}"><i class="btn btn-warning">X</i></a>
                        <form action="{{ route('delete', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">X</button>
                        </form> 
                        </div> 
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection