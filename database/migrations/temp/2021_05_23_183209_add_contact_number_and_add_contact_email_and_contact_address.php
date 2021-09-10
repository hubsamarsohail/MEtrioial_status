<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContactNumberAndAddContactEmailAndContactAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms', function (Blueprint $table) {
            $table->string('contact_email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cms', function (Blueprint $table) {
            $table->string('contact_email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_address')->nullable();
        });
    }
}
