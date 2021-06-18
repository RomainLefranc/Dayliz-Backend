@extends('layout')
@section('content')

    <a href="/users/create"><button class="btn btn-primary mt-5">Créer un utilisateur</button></a>

    <h1>Liste des utilisateurs</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($users as $user)
                    <th scope="row"> <a href="{{ route('users.edit', $user->id) }}"> {{ $user->id }} </a></th>
                    <td>{{ $user->lastName }}</td>
                    <td>{{ $user->firstName }}</td>
                    <td>

                        @if ($user->state)
                            <a href="user/desactivate/{{ $user->id }}">
                                <button class="btn btn-danger">Désactiver</button>
                            </a>
                        @else
                        <a href="user/activate/{{ $user->id }}">
                            <button class="btn btn-success">Activer</button>
                        </a>
                        @endif


                    </td>
                @endforeach
            </tr>
        </tbody>
    </table>

@endsection