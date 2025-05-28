<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table = 'categories_post';
    // protected $fillable = ['name', 'slug', 'parent_id', 'status'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'post_id');
    }

    // public function parent()
    // {
    //     return $this->belongsTo(CategoryPost::class, 'parent_id');
    // }

    // public function children()
    // {
    //     return $this->hasMany(CategoryPost::class, 'parent_id');
    // }
}
