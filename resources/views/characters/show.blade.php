@extends('layouts.app')
@section('title', 'show-character')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <ul>
                <li>{{$character->name}}</li>
                <li>{{$character->bio}}</li>
                <li>{{$character->defense}}</li>
                <li>{{$character->hp}}</li>
                <li>{{$character->attack}}</li>
                <li>{{$character->speed}}</li>
            </ul>
        </div>
    </div>
</div>
@endsection