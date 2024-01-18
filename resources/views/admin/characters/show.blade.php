@extends('layouts.app')
@section('title', 'show-character')

@section('content')
    <div class="container">

        <h2 class="text-center display-2 mb-5">{{ $character->name }}</h2 class="display -2">
        <p class="display-6 mb-5">{{ $character->bio }}</p>
        <ul>
            @forelse ($character->items as $item)
                <li>{{ $item->name }}</li>
            @empty
                <li>Your character has no items!</li>
            @endforelse
        </ul>
        <ul class="display-6 list-unstyled d-flex justify-content-center gap-5">
            <li><span class="fw-bold">TYPE</span> {{ $character->type->name }}</li>
            <li><span class="fw-bold">HP</span> {{ $character->hp }}</li>
            <li><span class="fw-bold">ATK</span> {{ $character->attack }}</li>
            <li><span class="fw-bold">DEF</span> {{ $character->defense }}</li>
            <li> <span class="fw-bold">SPD</span> {{ $character->speed }}</li>
        </ul>
        <img class="img-fluid" src="{{ asset('storage/' . $character->image) }}" alt="Immagine del progetto">

    </div>
@endsection
