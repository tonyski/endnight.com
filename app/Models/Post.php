<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'slug', 'title', 'subtitle', 'content', 'mate_description', 'is_original', 'is_draft',
        'published_at'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
