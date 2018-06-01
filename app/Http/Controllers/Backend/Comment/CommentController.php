<?php

namespace App\Http\Controllers\Backend\Comment;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view("backend.comment.index", compact("comments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $comment=Comment::where("id",$id)->first();
        return view("backend.comment.edit",compact("comment"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $comment=Comment::where("id",$request->id)->update([
            "comment"=>$request->comment
        ]);

        if ($comment) {

            return ["status" => "success", "title" => "başarılı", "message" => "Yorum Kaydedildi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yorum Kaydedilemedi"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $comment=Comment::where("id",$request->id)->delete();

        if ($comment) {

            return ["status" => "success", "title" => "başarılı", "message" => "Yorum Kaydedildi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yorum Kaydedilemedi"];
    }

    public function onayKaldir(Request $request)
    {
        $comment = Comment::where("id", $request->id)->update([
            "status" => "0"
        ]);
        if ($comment) {

            return ["status" => "success", "title" => "başarılı", "message" => "Yorum Onay Kaldırıldı"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yorum Onay Kaldırılamadı"];

    }

    public function onaylaBtn(Request $request)
    {
        $comment = Comment::where("id", $request->id)->update([
            "status" => "1"
        ]);
        if ($comment) {

            return ["status" => "success", "title" => "başarılı", "message" => "Yorum Onaylandı"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yorum Onaylanamadı"];

    }
}
