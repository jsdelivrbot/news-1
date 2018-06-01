<?php

namespace App\Http\Controllers\Frontend\Page;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($id)
    {
        $page = Page::where("id", $id)->first();
        $mostcomments = Comment::where("status", "1")->withCount("article")->orderby("article_count","desc")->take(5)->get(); //bu sorgu düzelecek
        $lastComments=Comment::where("status","1")->orderby("created_at","desc")->take(10)->get();
        return view("frontend.page.index", compact("page",  "mostcomments","lastComments"));
    }
}
