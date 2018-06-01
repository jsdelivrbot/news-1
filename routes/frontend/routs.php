<?php
/**
 * Created by PhpStorm.
 * User: mmehe
 * Date: 27.05.2018
 * Time: 18:46
 */

Route::group(["as" => "frontend", "namespace" => "Frontend"], function () {
    Route::group(["as" => ".home", "namespace" => "Home"], function () {
        Route::get("/", "HomeController@index")->name(".index");
        Route::get("/cikis", "HomeController@logout")->name(".logout");
        Route::post("/subscribe", "HomeController@subscribe")->name(".subscribe");

    });

    Route::group(["prefix" => "iletisim", "as" => ".contact", "namespace" => "Contact"], function () {
        Route::get("/", "ContactController@index")->name(".index");

    });

    Route::group(["prefix" => "sayfa", "as" => ".page", "namespace" => "Page"], function () {
        Route::get("/{id}/{slug}", "PageController@index")->name(".index");

    });

    Route::group(["prefix" => "kategori", "as" => ".category", "namespace" => "Category"], function () {
        Route::get("/{id}/{slug}", "CategoryController@index")->name(".index");

    });

    Route::group(["prefix" => "yazi", "as" => ".article", "namespace" => "Article"], function () {
        Route::get("/{id}/{slug}", "ArticleController@index")->name(".index");
        Route::post("/new-comment", "ArticleController@comment")->name(".comment");

    });

//    Route::group(["prefix" => "kullanici", "as" => ".user", "namespace" => "User"], function () {
//        Route::get("/{id}/{name}", "UserController@index")->name(".index");
//
//    });

    Route::group(["prefix" => "arama", "as" => ".search", "namespace" => "Search"], function () {
        Route::post("/", "SearchController@index")->name(".index");

    });

    Route::group(["prefix" => "kullanici", "as" => ".user", "namespace" => "User"], function () {
        Route::get("/", "UserController@profil")->name(".profil");
        Route::post("/update", "UserController@update")->name(".update");
        Route::get("/{id}/{name}", "UserController@index")->name(".index");

    });

});
