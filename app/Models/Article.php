<?php

namespace App\Models;

use App\User;
use CyrildeWit\EloquentViewable\Viewable;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use Viewable;

    protected $table = "articles";
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo("App\Models\Category", "category_id");
    }

    public function user()
    {
        return $this->belongsTo("App\User", "user_id");
    }

    public function comment(){
        return $this->hasMany("App\Models\Comment","article_id");
    }


}
