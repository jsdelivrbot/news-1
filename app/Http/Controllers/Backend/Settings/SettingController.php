<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Http\Requests\Backend\Settings\CreateRequest;
use App\Http\Requests\Backend\Settings\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::where("id", 1)->first();
        return view("backend.settings.create", compact("settings"));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingUpdateRequest $request, $id)
    {

        $oldFile = Setting::where("id", 1)->first();
        $filePath = $oldFile->logo;

        if ($request->file("logo") != null) {
            $oldPath=substr($filePath,8);

            Storage::disk("uploads")->delete($oldPath);
            $file = Storage::disk("uploads")->putFile("/dosyalar", $request->file("logo"));
            $filePath = "uploads/" . $file;
        }

        $setting = Setting::where("id", $id)->update([
            "tittle" => $request->tittle,
            "description" => $request->description,
            "logo" => $filePath,
            "email" => $request->email,
            "aboutUs" => $request->aboutUs,
            "facebook" => $request->facebook,
            "twitter" => $request->twitter,
            "instagram" => $request->instagram,
            "google" => $request->google,
            "pinterest" => $request->pinterest,
            "adress" => $request->adress,
            "phone" => $request->phone,
            "fax" => $request->fax,
            "mapApi" => $request->mapApi,



        ]);
        if ($setting) {

            return ["status" => "success", "title" => "başarılı", "message" =>"Logo Güncellendi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Logo Güncellenemedi"];
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
