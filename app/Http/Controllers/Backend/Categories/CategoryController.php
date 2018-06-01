<?php

namespace App\Http\Controllers\Backend\Categories;

use App\Http\Requests\Backend\Categories\CategoryCreateRequest;
use App\Http\Requests\Backend\Categories\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view("backend.categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where("ust_id", null)->get();
        return view("backend.categories.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {

        $category = new Category();
        $category->tittle = $request->tittle;
        $category->description = $request->description;
        $category->ust_id = $request->ust_id;
        $category->slug = str_slug($request->tittle);


        if ($category->save()) {

            return ["status" => "success", "title" => "başarılı", "message" => "Kategori Eklendi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Kategori Eklenemedi"];
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
        $category = Category::where("id", $id)->first();
        $allcategories = Category::all();
        return view("backend.categories.edit", compact("category", "allcategories"));
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

        $category = Category::where("id", $request->id)->update([

            "tittle" => $request->tittle,
            "description" => $request->description,
            "ust_id" => $request->ust_id,
            "slug" => str_slug($request->tittle)

        ]);

        if ($category) {

            return ["status" => "success", "title" => "başarılı", "message" => "Kategori Güncellendi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Kategori Güncellenemedi"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = Category::where("id", $request->id)->delete();

        if ($category) {

            return ["status" => "success", "title" => "başarılı", "message" => "Blog silindi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Blog silinemedi"];
    }
}
