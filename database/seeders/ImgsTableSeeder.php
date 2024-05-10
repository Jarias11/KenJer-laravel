<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\tags; // Import your Tag model

class ImgsTableSeeder extends Seeder
{
    public function run()
    {
        $tagsWithImages = [
            'Kitchen' => 'kitchen/kitchen1.jpg',
            'Patio' => 'patio/patio1.jpg',
            'Basement' => 'basement/basement1.jpg',
            'Bathroom' => 'bathroom/bathroom1.jpg',
        ];

        foreach ($tagsWithImages as $tagName => $imagePath) {
            // First, find the tag by its name to get its id
            $tag = tags::where('name', $tagName)->first();

            // Insert the image into the images table
            $imageId = DB::table('images')->insertGetId([
                'filename' => basename($imagePath),
                'path' => 'images/' . $imagePath, // Assuming the base is public/images
                'description' => $tagName . ' image',
            ]);

            // Associate the image with the tag in the image_tags pivot table
            DB::table('img_tags')->insert([
                'images_id' => $imageId,
                'tags_id' => $tag->id,
            ]);
        }
    }
}
