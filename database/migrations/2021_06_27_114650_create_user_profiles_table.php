<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('user_profile_id');
            $table->string('sur_name', 50);
            $table->string('nationality', 50);
            $table->integer('age');
            $table->string('dob', 15);
            $table->string('height', 15)->nullable();
            $table->string('religion', 50);
            $table->string('cast', 50);
            $table->string('mother_lang', 50);
            $table->string('other_lang', 50);
            $table->string('image_path', 150)->nullable();
            $table->bigInteger('mobile');
            $table->string('email', 75);
            $table->string('fb_addresss', 255)->nullable();
            $table->string('instragram', 255)->nullable();
            $table->string('marital_status', 50)->nullable();
            $table->string('hair_color', 50)->nullable();
            $table->string('body_shape', 50)->nullable();
            $table->string('eye_color' , 40)->nullable();
            $table->string('ethnicity' , 40);
            $table->string('skin_color' , 40)->nullable();
            $table->integer('child_age')->nullable();
            $table->string('complexion', 50)->nullable();
            $table->string('life_style', 50)->nullable();
            $table->string('salary_range', 75)->nullable();
            $table->string('docor_degree', 75)->nullable();
            $table->integer('physique_id')->nullable();
            $table->integer('no_of_children')->nullable();
            $table->tinyInteger('drink_status')->default('0')->nullable();
            $table->tinyInteger('smoke_status')->default('0')->nullable();
            $table->tinyInteger('pet_status')->default('0')->nullable();
            $table->tinyInteger('chat')->default('0');
            $table->tinyInteger('phone_cell')->default('0');
            $table->string('profession', 50)->nullable();
            $table->string('job_title', 50);
            $table->string('education', 50)->nullable();
            $table->string('skill', 50)->nullable();
            $table->string('types', 50)->nullable();
            $table->string('business_turnour', 50)->nullable();
            $table->string('address')->nullable();
            $table->string('description', 50)->nullable();
            $table->string('elementry_school', 50)->nullable();
            $table->string('heigh_school', 50)->nullable();
            $table->string('university', 50)->nullable();
            $table->string('bachelor_school', 50)->nullable();
            $table->string('master_school', 50)->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->tinyInteger('partner_alcohol')->default('0')->nullable();
            $table->tinyInteger('second_marriage')->default('0')->nullable();
            $table->tinyInteger('partner_smoke')->default('0')->nullable();
            $table->tinyInteger('partner_divorce')->default('0')->nullable();
            $table->nullableTimestamps();
            $table->foreignId('web_user_id')->constrained('web_users', 'web_user_id')->onDelete('cascade');
            $table->foreignId('residential_city')->constrained('cities', 'city_id')->onDelete('cascade');
            $table->foreignId('work_city')->constrained('cities', 'city_id')->onDelete('cascade');
            $table->foreignId('country_id')->constrained('countries', 'country_id')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities', 'city_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
