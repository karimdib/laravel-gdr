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
            </tr>
        </thead>
        <tbody>
            @forelse ($characters as $character)
            <tr>
                <td>
                    {{ $character->name }}
                </td>
                <td>
                    {{ $character->bio }}
                </td>
                <td>
                    {{ $character->defense }}
                </td>
                <td>
                    {{ $character->speed }}
                </td>
                <td>
                    {{ $character->hp }}
                </td>
            </tr>
            @empty
                 Nessun personaggio trovato!
            @endforelse
        </tbody>
    </table>
        
    
   
@endsection
