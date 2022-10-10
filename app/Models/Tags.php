<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $table = 'post_tags';

    protected $fillable = [
        'tag_id',
        'name',
        'meta_title',
        'slug',
        'created_by'
    ];
    public function posts(){

        return $this->belongsToMany(Post::class);
    }

}
