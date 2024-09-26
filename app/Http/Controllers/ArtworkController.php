<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function showById(Request $request) {
        $artwork = Artwork::where('id', $request->artworkId)->first();

        $attributes = $artwork->attributesToArray();
        return view('artwork', ['attributes' => $attributes]);
    }
}
