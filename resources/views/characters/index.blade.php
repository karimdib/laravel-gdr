@extends('layouts.app')

@section('title', 'Characters')

@section('content')
    <div class="container bg-white rounded rounded-4 p-5 shadow">
        <table class="table mb-5">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Bio</th>
                    <th>HP</th>
                    <th>Attack</th>
                    <th>Def</th>
                    <th>Speed</th>
                    <th class="text-center" colspan="3">-</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($characters as $character)
                    <tr>
                        <td> {{ $character->name }} </td>
                        <td> {{ $character->bio }} </td>
                        <td> {{ $character->hp }} </td>
                        <td> {{ $character->attack }} </td>
                        <td> {{ $character->defense }} </td>
                        <td> {{ $character->speed }} </td>

                        <td>
                            <a class="btn btn-sm btn-success" href="{{ route('characters.show', $character) }}">Details</a>
                        </td>

                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('characters.edit', $character) }}">Edit</a>
                        </td>

                        <td>
                            <form action="{{ route('characters.destroy', $character) }}" method="POST" id="deletionForm">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" id="deletion" type="submit"
                                    name="{{ $character->name }}">Delete</button>
                            </form>
                        </td>

                    </tr>
                @empty
                    Nessun personaggio trovato!
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('characters.create') }}">
            <button class="btn btn-outline-success w-100 fw-semibold">Create Character</button>
        </a>
    </div>





@endsection
