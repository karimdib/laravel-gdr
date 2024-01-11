<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view('admin.characters.index', compact('characters'));
    }

    public function show(Character $character)
    {
        return view('admin.characters.show', compact('character'));
    }

    public function create()
    {
        return view('admin.characters.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $new_character = Character::create($data);

        return redirect()->route('admin.characters.show', $new_character);
    }

    public function edit(Character $character)
    {
        return view('admin.characters.edit', compact('character'));
    }

    public function update(Request $request, Character $character)
    {
        $data = $request->all();

        $character->update($data);

        return redirect()->route('admin.characters.show', $character);
    }

    public function destroy(Character $character)
    {
        $character->delete();

        return redirect()->route('admin.characters.index');
    }
}
