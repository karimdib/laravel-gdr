<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

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
        $types = Type::orderBy('name', 'ASC')->get();
        $items = Item::orderBy('name', 'ASC')->get();
        return view('admin.characters.create', compact('types', 'items'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = Storage::put('uploads/images',$request->image);
            $data['image'] = $path;
        }

        $new_character = Character::create($data);

        if ($request->has('items')) {
            $new_character->items()->attach($data['items']);
        }

        return redirect()->route('admin.characters.show', $new_character);
    }

    public function edit(Character $character)
    {
        $types = Type::orderBy('name', 'ASC')->get();
        $items = Item::orderBy('name', 'ASC')->get();
        return view('admin.characters.edit', compact('character', 'types', 'items'));
    }

    public function update(Request $request, Character $character)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = Storage::put('uploads/images',$request->image);
            $data['image'] = $path;

            if ($character->image) {
                Storage::delete($character->image);
            }
        }

        $character->update($data);

        if ($request->has('items')) {
            $character->items()->sync($data['items']);
        } else {
            $character->items()->detach();
        }

        return redirect()->route('admin.characters.show', $character);
    }

    public function destroy(Character $character)
    {
        $character->items()->detach();
        $character->delete();

        return redirect()->route('admin.characters.index');
    }
}
