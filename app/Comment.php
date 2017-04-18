<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //  define fields allowed for mass assignment
    protected $fillable = ['body', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
