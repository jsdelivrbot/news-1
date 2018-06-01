<?php

namespace App\Http\Controllers\Frontend\Search;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->search;
        $searchs = Article::where("tittle","LIKE","%".$search."%")->latest()->paginate(5);
        $mostcomments = Comment::where("status", "1")->withCount("article")->orderby("article_count", "desc")->take(5)->get();
        $lastComments = Comment::where("status", "1")->orderby("created_at", "desc")->take(10)->get();

        return view("frontend.search.index", compact("searchs", "mostcomments", "lastComments","search"));
    }
}
