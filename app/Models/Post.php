<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'category_id',
        'tag_id',
        'name',
        'slug',
        'description',
        'yt_iframe',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'status',
        'created_by'
    ];

    public function category(){

        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function post_tags(){

        return $this->belongsTo(Tags::class, 'tag_id', 'id');
    }
    public function tags(){

        /* return $this->morphToMany(Taggables::class, 'taggable'); */
    }
}
