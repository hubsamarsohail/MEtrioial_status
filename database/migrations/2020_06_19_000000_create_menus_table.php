<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('menu_id');
            $table->bigInteger('parent_menu_id')->default(0);
            $table->string('title', 50);
            $table->string('route', 30)->nullable();
            $table->string('icon', 25)->nullable();
            $table->tinyInteger('display_menu')->default(1);
            $table->tinyInteger('sort_order')->default(0);
            $table->tinyInteger('is_active')->default(1);
            $table->nullableTimestamps();

            $table->foreignId('created_by')->constrained('users', 'user_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
