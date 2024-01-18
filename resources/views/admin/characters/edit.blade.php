@extends('layouts.app')

@section('title', 'Edit Character')

@section('content')
    <div class="container rounded rounded-4 p-5 shadow bg-white">

        <form action="{{ route('admin.characters.update', $character) }}" method="POST">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="name">Character Name</label>
                <input class="form-control" type="text" name="name" id="name" required value="{{ $character->name }}">
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Class</label>
                <select name="type_id" class="form-control" id="type_id">
                    <option value="">Select class</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id', optional($character->type)->id) == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <p>Choose your items:</p>
                <div class="d-flex flex-wrap gap-4 ">
                    @foreach ($items as $item)
                        <div class="form-check">
                            <input name="items[]" class="form-check-input" type="checkbox" value="{{ $item->id }}"
                                id="item-{{ $item->id }}" @checked(in_array($item->id, old('items', $character->items->pluck('id')->all())))>
                            <label class="form-check-label" for="item-{{ $item->id }}">
                                {{ $item->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mb-3">
                <label for="hp">HP</label>
                <input class="form-control" type="number" name="hp" id="hp" min="0" max="9999"
                    required value="{{ $character->hp }}">
            </div>

            <div class="mb-3">
                <label for="attack">Attack</label>
                <input class="form-control" type="number" name="attack" id="attack" min="0" max="999"
                    required value="{{ $character->attack }}">
            </div>

            <div class="mb-3">
                <label for="defense">Defense</label>
                <input class="form-control" type="number" name="defense" id="defense" min="0" max="999"
                    required value="{{ $character->defense }}">
            </div>

            <div class="mb-3">
                <label for="speed">Speed</label>
                <input class="form-control" type="number" name="speed" id="speed" min="0" max="999"
                    required value="{{ $character->speed }}">
            </div>

            <div class="mb-5">
                <label for="bio">Character Bio</label>
                <textarea class="form-control" name="bio" id="bio" rows="2">{{ $character->bio }}</textarea>
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
