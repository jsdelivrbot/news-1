<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo("App\User", "user_id");
    }

    public function article()
    {
        return $this->belongsTo("App\Models\Article", "article_id");
    }
}
