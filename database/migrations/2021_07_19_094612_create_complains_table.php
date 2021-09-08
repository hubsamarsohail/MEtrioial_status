<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->bigIncrements('complain_id');
            $table->string('description')->nullable();
            $table->foreignId('complain_type_id')->constrained('complain_types', 'complain_tye_id')->onDelete('cascade');
            $table->foreignId('user_profile_id')->constrained('user_profiles', 'user_profile_id')->onDelete('cascade');
            $table->foreignId('from_user_id')->constrained('web_users', 'web_user_id')->onDelete('cascade');
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
        Schema::dropIfExists('complains');
    }
}
