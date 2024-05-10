<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tags;

class GalleryController extends Controller
{
    public function index()
    {
        // Fetch all tags along with their images
        $tags = tags::with('images')->get();

        return view('gallery', compact('tags'));
    }
}
