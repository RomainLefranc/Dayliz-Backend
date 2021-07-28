@extends('layout')
@section('content')
   

    <div class="d-flex justify-content-between align-items-center">
        <h1>Liste des examens</h1>
        <a href="{{ route('examens.create') }}"><button class="btn btn-success">Ajouter</button></a>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Date de début</th>
                <th scope="col">Date de fin</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($examens as $examen)
                <tr>
                    <td>{{ $examen->id }}</td>
                    <td>{{ $examen->name }}</td>
                    <td>{{ $examen->beginAt }}</td>
                    <td>{{ $examen->endAt }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('examens.edit', $examen->id) }}" role="button">Modifier</a>
                    </td>
                </tr>
                @endforeach
            
        </tbody>
    </table>

@endsection
