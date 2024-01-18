<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
        $results = Character::with('items', 'type')->paginate(20);
        // $results = Character::all();

        return response()->json([
            'results' => $results,
            'success' => true
        ]);
    }
}
