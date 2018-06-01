<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $guarded = [];

    public function article()
    {
        return $this->hasMany("App\Models\Article", "category_id");
    }

    public function maincategory()
    {
        return $this->belongsTo("App\Models\Category", "id");
    }

    public function subcategory()
    {
        return $this->hasMany("App\Models\Category", "ust_id");
    }
}
