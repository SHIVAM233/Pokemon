<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PokemonController extends Controller
{
    public function index()
    {
        return view('pokemon.index');
    }

    public function search(Request $request)
    {   
        $query = $request->input('query');

        if (!$query) {
            return redirect()->route('home')->withErrors(['error' => 'Please enter a Pokémon name or ID.']);
        }
    
        $apiUrl = "https://pokeapi.co/api/v2/pokemon/{$query}";
    
        try {
            $response = Http::get($apiUrl);
    
            if ($response->ok()) {
                $pokemon = $response->json();
                return view('pokemon.details', compact('pokemon'));
            } else {
                return redirect()->route('home')->withErrors(['error' => 'Pokémon not found.']);
            }
        } catch (\Exception $e) {
            return redirect()->route('home')->withErrors(['error' => 'Failed to fetch Pokémon.']);
        }
    }
}