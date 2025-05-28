<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category_post()
    {
        return $this->belongsTo(CategoryPost::class, 'post_id');
    }
}
