<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'path', 'description'];

    public function tags()
    {
        return $this->belongsToMany(tags::class, 'img_tags');
    }

}
