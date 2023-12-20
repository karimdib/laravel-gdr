@extends('layouts.app')

@section('title', 'Character')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Bio</th>
                <th>Def</th>
                <th>Speed</th>
                <th>HP</th>
                <th>attack</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($characters as $character)
                <tr>
                    <td>
                        <a href="{{ route('characters.show', $character) }}">
                            {{ $character->name }}
                        </a>

                    </td>
                    <td>
                        <a href="{{ route('characters.show', $character) }}">
                            {{ $character->bio }}
                        </a>

                    </td>
                    <td>
                        <a href="{{ route('characters.show', $character) }}">
                            {{ $character->defense }}
                        </a>

                    </td>
                    <td>
                        <a href="{{ route('characters.show', $character) }}">
                            {{ $character->speed }}
                        </a>

                    </td>
                    <td>
                        <a href="{{ route('characters.show', $character) }}">
                            {{ $character->hp }}
                        </a>

                    </td>
                    <td>
                        <a href="{{ route('characters.show', $character) }}">
                            {{ $character->attack }}
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{ route('characters.edit', $character) }}">Edit</a>
                    </td>
                </tr>
            @empty
                Nessun personaggio trovato!
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('characters.create') }}">
        <button class="btn btn-outline-primary">Create Character</button>
    </a>



@endsection
