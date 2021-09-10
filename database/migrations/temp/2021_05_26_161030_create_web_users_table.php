<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_users', function (Blueprint $table) {
            $table->bigIncrements('web_user_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 75)->unique();
            $table->string('password', 100);
            $table->enum('gender', ['M', 'F', 'O']);
            $table->tinyInteger('is_active')->default(1);
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_users');
    }
}
