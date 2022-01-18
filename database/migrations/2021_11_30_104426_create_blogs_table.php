<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->String('title');
            $table->foreignId('user_id')->nullable();
            $table->String('description')->nullable();
            $table->String('image')->default('/images/default-blog-image.png');
            $table->longText('blog');
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")->nullOnDelete();
            $table->foreign("updated_by")->references("id")->on("users")->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
