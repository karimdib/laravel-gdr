@extends('layouts.app')

@section('title', 'Create Character')

@section('content')
    <div class="container rounded rounded-4 p-5 shadow bg-white">

        <form action="{{ route('admin.characters.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Character Name</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Class</label>
                <select name="type_id" class="form-select" id="type_id">
                    <option value="">Select class</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="hp">HP</label>
                <input class="form-control" type="number" name="hp" id="hp" min="0" max="9999"
                    required>
            </div>

            <div class="mb-3">
                <label for="attack">Attack</label>
                <input class="form-control" type="number" name="attack" id="attack" min="0" max="999"
                    required>
            </div>

            <div class="mb-3">
                <label for="defense">Defense</label>
                <input class="form-control" type="number" name="defense" id="defense" min="0" max="999"
                    required>
            </div>

            <div class="mb-3">
                <label for="speed">Speed</label>
                <input class="form-control" type="number" name="speed" id="speed" min="0" max="999"
                    required>
            </div>

            <div class="mb-5">
                <label for="bio">Character Bio</label>
                <textarea class="form-control" name="bio" id="bio" rows="2"></textarea>
            </div>

            <div class="d-flex gap-3">
                <input class="btn btn-primary" type="submit" value="Submit">

                <a href="{{ url()->previous() }}">
                    <button class="btn btn-danger" type="button">Cancel</button>
                </a>
            </div>

        </form>

    </div>
@endsection
