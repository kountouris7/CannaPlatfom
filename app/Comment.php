<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $fillable =['article_id', 'user_id', 'body'];

    public function commenter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
