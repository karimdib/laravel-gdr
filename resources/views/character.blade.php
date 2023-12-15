@extends('layouts.app')

@section('content')
    @forelse ($characters as $character)
        <p>{{ $character->name }}</p>
    @empty
        Nessun personaggio trovato!
    @endforelse
@endsection
