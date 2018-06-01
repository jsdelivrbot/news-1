<?php

namespace App\Http\Controllers\Frontend\Category;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::where("id", $id)->first();
        $articles = Article::where("category_id", $id)->orderby("created_at","desc")->paginate(5);
        $mostcomments = Comment::where("status", "1")->withCount("article")->orderby("article_count","desc")->take(5)->get();
        $lastComments=Comment::where("status","1")->orderby("created_at","desc")->take(10)->get();

        return view("frontend.category.index", compact("articles","category","mostcomments","lastComments"));
    }
}
