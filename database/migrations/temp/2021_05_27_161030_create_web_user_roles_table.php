<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_user_roles', function (Blueprint $table) {
            $table->bigIncrements('web_user_role_id');

            $table->foreignId('web_role_id')->constrained('web_roles', 'web_role_id')->onDelete('cascade');
            $table->foreignId('web_user_id')->constrained('web_users', 'web_user_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_user_roles');
    }
}
