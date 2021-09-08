<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_logs', function (Blueprint $table) {
            $table->bigIncrements('profile_log_id');
            $table->foreignId('web_user_id')->constrained('web_users', 'web_user_id')->onDelete('cascade');
            $table->foreignId('user_profile_id')->constrained('user_profiles', 'user_profile_id')->onDelete('cascade');
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
        //
    }
}
