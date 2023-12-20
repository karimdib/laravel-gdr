@extends('layouts.app')

@section('title', 'Edit Character')

@section('content')
    <div class="container p-5">

        <form action="{{ route('characters.update', $character) }}" method="POST">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="name">Character Name</label>
                <input class="form-control" type="text" name="name" id="name" required value="{{ $character->name }}">
            </div>

            <div class="mb-3">
                <label for="hp">HP</label>
                <input class="form-control" type="text" name="hp" id="hp" required
                    value="{{ $character->hp }}">
            </div>

            <div class="mb-3">
                <label for="attack">Attack</label>
                <input class="form-control" type="number" name="attack" id="attack" required
                    value="{{ $character->attack }}">
            </div>

            <div class="mb-3">
                <label for="defense">Defense</label>
                <input class="form-control" type="number" name="defense" id="defense" required
                    value="{{ $character->defense }}">
            </div>

            <div class="mb-3">
                <label for="speed">Speed</label>
                <input class="form-control" type="number" name="speed" id="speed" required
                    value="{{ $character->speed }}">
            </div>

            <div class="mb-3">
                <label for="bio">Character Bio</label>
                <textarea class="form-control" name="bio" id="bio" rows="2">{{ $character->bio }}</textarea>
            </div>

            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>

    </div>
@endsection
