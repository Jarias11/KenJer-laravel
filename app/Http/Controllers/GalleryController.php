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
            'images.*' => 'required|image|max:20480',  // Max 20MB per file
            'tag' => 'required|exists:tags,id'  // Ensure the tag ID exists
        ]);

        $tag = \App\Models\tags::findOrFail($request->tag);  // Fetch the tag
        $tagName = strtolower($tag->name);

        // Get the count of existing images for the specified tag
        $existingImagesCount = \App\Models\images::whereHas('tags', function ($query) use ($tag) {
            $query->where('id', $tag->id);
        })->count();

        if ($request->hasFile('images')) {
            $index = $existingImagesCount + 1;  // Start the index after the existing images count
            foreach ($request->file('images') as $file) {
                $extension = $file->getClientOriginalExtension();
                $newFileName = $tagName . $index . '.' . $extension;  // Create the new file name

                $imagePath = $file->storeAs(
                    'images/' . $tagName,  // Directory path
                    $newFileName,
                    'public'  // Disk
                );

                $image = new \App\Models\images([
                    'filename' => $newFileName,
                    'path' => 'storage/' . $imagePath,
                    'description' => 'Description for ' . $tag->name . ' image',
                ]);

                $image->save();
                $image->tags()->attach($tag->id);  // Attach tag to the image

                $index++;  // Increment the index for the next image
            }
        }

        return back()->with('success', 'Images uploaded successfully!');
    }
    public function storeTag(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags|max:255'
        ]);

        $tag = new tags();
        $tag->name = $request->name;
        $tag->save();

        return back()->with('success', 'Tag created successfully!');
    }
}
