@extends('layouts.app')

@section('title', 'Create Character')

@section('content')
    <div class="container p-5">

        <form action="{{ route('characters.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Character Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="hp">HP</label>
                <input class="form-control" type="text" name="hp" id="hp" required>
            </div>

            <div class="mb-3">
                <label for="attack">Attack</label>
                <input class="form-control" type="number" name="attack" id="attack" required>
            </div>

            <div class="mb-3">
                <label for="defense">Defense</label>
                <input class="form-control" type="number" name="defense" id="defense" required>
            </div>

            <div class="mb-3">
                <label for="speed">Speed</label>
                <input class="form-control" type="number" name="speed" id="speed" required>
            </div>

            <div class="mb-3">
                <label for="bio">Character Bio</label>
                <textarea class="form-control" name="bio" id="bio" rows="2">Character bio...</textarea>
            </div>

            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>

    </div>
@endsection
