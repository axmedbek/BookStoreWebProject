<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('username')->unique();
            $table->date('birthday');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('mob_phone1');
            $table->string('mob_phone2')->nullable();
            $table->string('zip_code');
            $table->string('address');
            $table->unsignedInteger('role_id')->default(2);
            $table->string('city');
            $table->string('activation_code')->nullable();
            $table->string('password');
            $table->boolean('is_active')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
