<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('authorId')->nullable();
            $table->integer('catId')->nullable();
            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('summary')->nullable();
            $table->text('image')->nullable();
            $table->text('metaTitle')->nullable();
            $table->enum('status',['0', '1'])->default(0)->comment('active=1','Inactive=0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};
