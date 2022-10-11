<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taggable extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'tag_id',
        'post_id'
    ];

    public function posts(){

        return $this->belongsToMany(Post::class, 'post_id', 'id');
    }
    public function post_tags(){

        return $this->belongsToMany(Tags::class, 'tag_id', 'id');
    }
}
