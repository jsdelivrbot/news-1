<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Requests\Backend\User\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {

    }

    public function profil()
    {
        if (!Auth::check()) {
            return redirect("/");
        } else {
            $user = Auth::user();
            return view("frontend.profile.index", compact("user"));
        }
    }

    public function update(UserUpdateRequest $request)
    {
        $userId = Auth::user()->id;

        $oldFile = User::where("id", $userId)->first();
        $filePath = $oldFile->avatar;

        if ($request->file("avatar") != null) {
            $oldPath = substr($filePath, 8);

            Storage::disk("uploads")->delete($oldPath);
            $file = Storage::disk("uploads")->putFile("/user", $request->file("avatar"));
            $filePath = "uploads/" . $file;
        }

        if ($request->password != $request->password_confirm) {
            return ["status" => "error", "title" => "Hatalı", "message" => "Şifreler Eşleşmiyor"];
        } else {
            $password = Hash::make($request->password);
        }

        $user = User::where("id", $userId)->update([
            "name" => $request->name,
            "email" => $request->email,
            "yetki" => $request->yetki,
            "avatar" => $filePath,
            "password" => $password,

        ]);
        if ($user) {

            return ["status" => "success", "title" => "başarılı", "message" => "Ayarlar Güncellendi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Ayarlar Güncellendi"];

    }
}
