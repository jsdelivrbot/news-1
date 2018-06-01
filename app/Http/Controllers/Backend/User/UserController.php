<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Requests\Backend\User\UserCreateRequest;
use App\Http\Requests\Backend\User\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("backend.user.index", compact("users"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {

        $file = Storage::disk("uploads")->putFile("/user", $request->file("avatar"));
        $filePath = "uploads/" . $file;

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->yetki = $request->yetki;
        $user->avatar = $filePath;

        if ($request->password != $request->password_confirmation) {
            return ["status" => "error", "title" => "Hatalı", "message" => "Şifreler Eşleşmiyor"];
        } else {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        if ($user) {

            return ["status" => "success", "title" => "başarılı", "message" => "Kullanıcı Eklendi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Kullanıcı Eklenemedi"];
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
        $user = User::where("id", $id)->first();
        return view("backend.user.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $oldFile = User::where("id", $id)->first();
        $filePath = $oldFile->avatar;

        if ($request->file("avatar") != null) {
            $oldPath = substr($filePath, 8);

            Storage::disk("uploads")->delete($oldPath);
            $file = Storage::disk("uploads")->putFile("/user", $request->file("avatar"));
            $filePath = "uploads/" . $file;
        }

        if ($request->password != $request->password_confirmation) {
            return ["status" => "error", "title" => "Hatalı", "message" => "Şifreler Eşleşmiyor"];
        } else {
            $password = Hash::make($request->password);
        }

        $user = User::where("id", $id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "yetki" => $request->yetki,
            "avatar" => $filePath,
            "password" => $password,

        ]);
        if ($user) {

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

        $user = User::where("id", $request->id)->first();
        $filePath = $user->avatar;
        $deletePath = substr($filePath, 8);
        Storage::disk("uploads")->delete($deletePath);


        $user->delete();



        if ($user) {

            return ["status" => "success", "title" => "başarılı", "message" => "Kullanıcı silindi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Kullanıcı silinemedi"];
    }
}
