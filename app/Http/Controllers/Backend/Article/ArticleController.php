<?php

namespace App\Http\Controllers\Backend\Article;

use App\Http\Requests\Backend\Article\ArticleCreateRequest;
use App\Http\Requests\Backend\Article\ArticleUpdateRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view("backend.article.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("backend.article.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleCreateRequest $request)
    {
        $file = Storage::disk("uploads")->putFile("/article", $request->file("image"));
        $filePath = "uploads/" . $file;

        $article = new Article();
        $article->tittle = $request->tittle;
        $article->content = $request->get("content");
        $article->slider = $request->slider;
        $article->category_id = $request->category_id;
        $article->user_id = $request->user_id;
        $article->image = $filePath;
        $article->user_id = Auth::user()->id;
        $article->slug = str_slug($request->tittle);

        $article->save();

        if ($article) {

            return ["status" => "success", "title" => "başarılı", "message" => "Logo Güncellendi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Logo Güncellenemedi"];

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::where("id", $id)->first();
        $categories = Category::all();
        return view("backend.article.edit", compact("article", "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleUpdateRequest $request, $id)
    {
        $oldFile = Article::where("id", $id)->first();
        $filePath = $oldFile->image;

        if ($request->file("image") != null) {
            $oldPath = substr($filePath, 8);

            Storage::disk("uploads")->delete($oldPath);
            $file = Storage::disk("uploads")->putFile("/article", $request->file("image"));
            $filePath = "uploads/" . $file;
        }

        $article = Article::where("id", $id);
        $user = $article->user_id;
        $article->update([
            "tittle" => $request->tittle,
            "content" => $request->get("content"),
            "category_id" => $request->category_id,
            "slider" => $request->slider,
            "user_id" => $user,
            "slug" => str_slug($request->tittle),
            "image" => $filePath,

        ]);
        if ($article) {

            return ["status" => "success", "title" => "başarılı", "message" => "Yazı Güncellendi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yazı Güncellenemedi"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $article = Article::where("id", $request->id)->first();
        $filePath = $article->image;
        $deletePath = substr($filePath, 8);
        Storage::disk("uploads")->delete($deletePath);


        $article->delete();


        if ($article) {

            return ["status" => "success", "title" => "başarılı", "message" => "Blog silindi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Blog silinemedi"];
    }
}
