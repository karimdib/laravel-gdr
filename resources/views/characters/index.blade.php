@extends('layouts.app')

@section('title', 'Characters')

@section('content')
    <div class="container p-5">
        <div class="grid-wrapper">

            {{-- Character Cards from DB --}}
            @foreach ($characters as $character)
                <div class="character-card">
                    <div class="card-text name">{{ $character->name }}</div>
                    <div class="card-text bio">{{ $character->bio }}</div>
                    <div class="card-stats">
                        <div class="card-text hp"><span class="stats">HP </span>{{ $character->hp }}</div>
                        <div class="card-text atk"><span class="stats">ATK </span>{{ $character->attack }}</div>
                        <div class="card-text def"><span class="stats">DEF </span>{{ $character->defense }}</div>
                        <div class="card-text spd"><span class="stats">SPD </span>{{ $character->speed }}</div>
                    </div>
                    <div class="card-text buttons">
                        <div class="card-button details">
                            <a href="{{ route('characters.show', $character) }}"><button>Details</button></a>
                        </div>
                        <div class="card-button edit">
                            <a href="{{ route('characters.edit', $character) }}"><button>Edit</button></a>
                        </div>
                        <div class="card-button delete">
                            <form action="{{ route('characters.destroy', $character) }}" method="POST" id="deletionForm">
                                @csrf @method('DELETE')
                                <button id="deletion" type="submit" name="{{ $character->name }}">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Character Create Card --}}
            <a href="{{ route('characters.create') }}">
                <div class="character-card create-card">Create Character</div>
            </a>

        </div>

    </div>

@endsection



{{-- {{ $character->name }}
{{ $character->bio }}
{{ $character->hp }}
{{ $character->attack }}
{{ $character->defense }}
{{ $character->speed }} --}}
