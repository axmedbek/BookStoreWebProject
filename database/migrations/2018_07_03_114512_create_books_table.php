<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',120);
            $table->string('book_img');
            $table->text('book_description');
            $table->unsignedInteger('publisher_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('sub_category_id');
            $table->unsignedInteger('book_status_id');
            $table->unsignedInteger('book_lang_id');
            $table->double('cost');
            $table->integer('page_count');
            $table->integer('stock_count');
            $table->date('publishing_date');
            $table->integer('isbn')->nullable();
            $table->integer('publishing_count')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('books');
    }
}
