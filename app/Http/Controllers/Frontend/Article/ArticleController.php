<?php

namespace App\Http\Controllers\Frontend\Article;

use App\Http\Requests\Frontend\Comment\CommentCreateRequest;
use App\Models\Article;
use App\Models\Comment;

use App\Http\Controllers\Controller;
use CyrildeWit\EloquentViewable\Viewable;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    use Viewable;

    public function index($id)
    {
        $article = Article::where("id", $id)->first();
        $article->addView();
        $comments = Comment::where("article_id", $id)->where("status", "1")->get();
        $mostcomments = Comment::where("status", "1")->withCount("article")->orderby("article_count", "desc")->take(5)->get(); //bu sorgu düzelecek
        $lastComments = Comment::where("status", "1")->orderby("created_at", "desc")->take(10)->get();
        $similerArticles = Article::where("id", "!=", $id)
            ->where("category_id", $article->category_id)
            ->orderby("created_at","desc")
            ->take(3)
            ->get();
        return view("frontend.news.detail", compact("article", "similerArticles", "comments", "mostcomments", "lastComments","post"));
    }

    public function comment(CommentCreateRequest $request)
    {
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->article_id = $request->id;
        $comment->comment = $request->comment;

        $comment->save();

        if ($comment) {

            return ["status" => "success", "title" => "başarılı", "message" => "Yorum Eklendi Onay Sonrası Gözükecektir"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yorum Eklenemedi"];


    }
}
