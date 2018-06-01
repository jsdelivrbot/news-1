<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Backend\Page\PageCreateRequest;
use App\Http\Requests\Backend\Page\PageUpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view("backend.page.index", compact("pages"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.page.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageCreateRequest $request)
    {
        $page = new Page();
        $page->tittle = $request->tittle;
        $page->content = $request->get("content");
        $page->slug=str_slug($request->tittle);

        $page->save();

        if ($page) {

            return ["status" => "success", "title" => "başarılı", "message" => "Sayfa Eklendi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Sayfa Eklenemedi"];

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
        $page = Page::where("id", $id)->first();
        return view("backend.page.edit", compact("page"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageUpdateRequest $request, $id)
    {
        $page = Page::where("id", $id)->update([
            "tittle" => $request->tittle,
            "content" => $request->get("content"),
            "slug"=>$request->tittle
        ]);
        if ($page) {

            return ["status" => "success", "title" => "başarılı", "message" => "Sayfa Güncellendi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Sayfa Güncellenemedi"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $page=Page::where("id",$request->id)->delete();
        if ($page) {

            return ["status" => "success", "title" => "başarılı", "message" => "Sayfa Silindi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Sayfa Silinemedi"];

    }
}
