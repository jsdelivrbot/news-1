<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Requests\Frontend\Subscribe\SubscribeCreateRequest;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Newsletter;

class HomeController extends Controller
{

    public function index()
    {
        $saglik = Article::where("category_id", 22)->orderby('created_at', 'desc')->take(5)->get();
        $teknoloji = Article::where("category_id", 19)->orderby('created_at', 'desc')->take(5)->get();
        $yasam = Article::where("category_id", 23)->orderby('created_at', 'desc')->take(5)->get();
        $sliders = Article::where("slider", "1")->orderby("created_at", "desc")->take(6)->get();
        $articles = Article::where("category_id", 18)->orderby('created_at', 'desc')->take(4)->skip(1)->get(); /*take(4) 4 tane getirir skip(1) ilkini geçer getirmez*/
        $onearticle = Article::where("category_id", 18)->orderby("created_at","desc")->first();
        $newarticles = Article::orderby("created_at", "desc")->take(5)->get();
        $comments = Comment::where("status", "1")->take(5)->get();
        $colors = ["1", "2", "3", "4", "5"];
        $all = Article::all();
        $popular2 = $all->sortByDesc(function ($all) {
            return $all->getViews();

        });
        $popular = $popular2->take(5);
        return view("frontend.home.index", compact("sliders", "articles", "onearticle", "newarticles", "comments", "colors", "popular", "saglik", "teknoloji", "yasam"));
    }


    public function logout()
    {
        auth()->logout();
        return redirect("/");
    }

    public function subscribe(SubscribeCreateRequest $request)
    {

        $kayıtli = Newsletter::isSubscribed($request->email);
        if ($kayıtli) {

            return ["status" => "error", "title" => "Hatalı", "message" => "Bu email adresi daha önce kaydedilmiş"];

        } else {
            $subscribe = Newsletter::subscribe($request->email);

            if ($subscribe) {

                return ["status" => "success", "title" => "Teşekkürler", "message" => "Email Adresiniz Kaydedildi"];
            }

            return ["status" => "error", "title" => "Hatalı", "message" => "Email Adresiniz Kaydedilemedi"];

        }
    }
}
