<?php
/**
 * Created by PhpStorm.
 * User: mmehe
 * Date: 27.05.2018
 * Time: 18:46
 */

Route::group(["prefix" => "admin", "as" => "backend", "namespace" => "Backend", "middleware" => "admin"], function () {
    Route::group(["prefix" => "", "as" => ".home", "namespace" => "Home"], function () {
        Route::get("/", "HomeController@index")->name(".index");
        Route::get("/cikis", "HomeController@logout")->name(".logout");
    });

    Route::group(["prefix" => "ayarlar", "as" => ".setting", "namespace" => "Settings"], function () {
        Route::get("/", "SettingController@index")->name(".index");
        Route::post("/update/{id}", "SettingController@update")->name(".update");
    });


    Route::group(["prefix" => "kategoriler", "as" => ".categories", "namespace" => "Categories"], function () {
        Route::get("/", "CategoryController@index")->name(".index");
        Route::get("/yeni-kategori", "CategoryController@create")->name(".create");
        Route::post("/store", "CategoryController@store")->name(".store");
        Route::get("/duzenle/{id}", "CategoryController@edit")->name(".edit");
        Route::post("/update", "CategoryController@update")->name(".update");
        Route::post("/delete", "CategoryController@destroy")->name(".delete");
    });

    Route::group(["prefix" => "yazilar", "as" => ".article", "namespace" => "Article"], function () {
        Route::get("/", "ArticleController@index")->name(".index");
        Route::get("/yeni-yazi", "ArticleController@create")->name(".create");
        Route::post("/store", "ArticleController@store")->name(".store");
        Route::get("/duzenle/{id}", "ArticleController@edit")->name(".edit");
        Route::post("/update/{id}", "ArticleController@update")->name(".update");
        Route::post("/delete", "ArticleController@destroy")->name(".delete");
    });

    Route::group(["prefix" => "kullanıcı", "as" => ".user", "namespace" => "User"], function () {
        Route::get("/", "UserController@index")->name(".index");
        Route::get("/yeni-kullanici", "UserController@create")->name(".create");
        Route::post("/store", "UserController@store")->name(".store");
        Route::get("/edit/{id}", "UserController@edit")->name(".edit");
        Route::post("/update/{id}", "UserController@update")->name(".update");
        Route::post("/delete", "UserController@destroy")->name(".delete");
    });

    Route::group(["prefix" => "sayfa", "as" => ".page", "namespace" => "Page"], function () {
        Route::get("/", "PageController@index")->name(".index");
        Route::get("/yeni", "PageController@create")->name(".create");
        Route::post("/store", "PageController@store")->name(".store");
        Route::get("/duzenle/{id}", "PageController@edit")->name(".edit");
        Route::post("/update/{id}", "PageController@update")->name(".update");
        Route::post("/delete", "PageController@destroy")->name(".delete");

    });

    Route::group(["prefix" => "yorum", "as" => ".comment", "namespace" => "Comment"], function () {
        Route::get("/", "CommentController@index")->name(".index");
        Route::get("/duzenle/{id}", "CommentController@edit")->name(".edit");
        Route::post("/update", "CommentController@update")->name(".update");
        Route::post("/delete", "CommentController@destroy")->name(".delete");
        Route::post("/onayKaldir", "CommentController@onayKaldir")->name(".onayKaldir");
        Route::post("/onaylaBtn", "CommentController@onaylaBtn")->name(".onaylaBtn");

    });

    Route::group(["prefix" => "galeri", "as" => ".galery", "namespace" => "Galery"], function () {
        Route::get("/", "GaleryController@index")->name(".index");
        Route::get("/create", "GaleryController@create")->name(".create");
        Route::post("/create", "GaleryController@store")->name(".store");
    });
});
