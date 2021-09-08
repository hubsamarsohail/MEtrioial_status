<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentChildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_childs', function (Blueprint $table) {
            $table->bigIncrements('parent_child_id');
            $table->tinyInteger('is_active')->default('0');
            $table->foreignId('parent_id')->constrained('web_users', 'web_user_id')->onDelete('cascade');
            $table->foreignId('child_id')->constrained('web_users', 'web_user_id')->onDelete('cascade');
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
        Schema::dropIfExists('parent_childs');
    }
}
