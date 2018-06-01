<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->unsigned();
            $table->integer("article_id")->unsigned();
            $table->text("comment");
            $table->enum("status", [1, 0])->default(0);
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")->ondelete("cascade");
            $table->foreign("article_id")->references("id")->on("articles")->ondelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
