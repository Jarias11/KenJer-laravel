<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    
    public function images()
    {
        return $this->belongsToMany(images::class, 'img_tags');
    }
    use HasFactory;
}
