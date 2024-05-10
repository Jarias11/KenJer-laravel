<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    public function tags()
    {
        return $this->belongsToMany(tags::class, 'img_tags');
    }
    use HasFactory;
}
