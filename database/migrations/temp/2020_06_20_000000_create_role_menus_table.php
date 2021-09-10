<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_menus', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->tinyInteger('is_active')->default(1);
            $table->nullableTimestamps();


            $table->foreignId('menu_id')->constrained('menus', 'menu_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('role_id')->constrained('roles', 'role_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('created_by')->constrained('users', 'user_id')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_menus');
    }
}
