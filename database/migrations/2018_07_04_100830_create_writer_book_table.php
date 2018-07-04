<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWriterBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writer_book', function (Blueprint $table) {
            $table->primary(['book_id','writer_id']);
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('writer_id');

            $table->foreign('book_id')->references('id')->on('books')->onDelete('CASCADE');
            $table->foreign('writer_id')->references('id')->on('writers')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writer_book');
    }
}
