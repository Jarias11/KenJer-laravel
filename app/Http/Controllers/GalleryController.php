<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tags;
use App\Models\images;

class GalleryController extends Controller
{
    public function index()
    {
        // Fetch all tags along with their images
        $tags = tags::with('images')->get();

        return view('gallery', compact('tags'));
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:10240',  // Max 2MB file
            'tag' => 'required|exists:tags,id'    // Ensure the tag ID exists
        ]);

        $tag = tags::findOrFail($request->tag);  // Fetch the tag
        $imagePath = $request->file('image')->storeAs(
            'images/' . strtolower($tag->name),  // Directory path
            $request->file('image')->getClientOriginalName(),
            'public'  // Disk
        );

        $image = new images([
            'filename' => $request->file('image')->getClientOriginalName(),
            'path' =>  'storage/' . $imagePath,
            'description' => 'Description for ' . $tag->name . ' image',
        ]);

        $image->save();
        $image->tags()->attach($tag->id);  // Attach tag to the image

        return back()->with('success', 'Image uploaded successfully!');
    }
}
