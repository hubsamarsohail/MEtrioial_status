<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('user_id');
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('username', 30)->unique();
            $table->string('email', 50)->unique();
            $table->string('password', 100);
            $table->string('mobile', 20);
            $table->string('address', 75);
            $table->string('img', 100)->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->unsignedInteger('wallet_balance')->default(0);
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
        Schema::dropIfExists('users');
    }
}
