<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id'); // create colum date            
            $table->string('title',100)->nullable(); // create colum title
            $table->text('content')->nullable(); // create colum text
            $table->timestamps();
            $table->softDeletes(); // create colum text make delete more soft if you delete on web browser data still in phpmyadmin but removed in web browser  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
