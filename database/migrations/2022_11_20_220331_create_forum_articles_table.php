<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('body');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::table('forum_articles', function (Blueprint $table) {

            $table -> foreign ( 'userId' ) -> references ( 'id' ) -> on ( 'users' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forum_articles');
    }
}
