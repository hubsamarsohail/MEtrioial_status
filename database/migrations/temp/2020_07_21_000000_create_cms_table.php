<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms', function (Blueprint $table) {
            $table->bigIncrements('cms_id');
            $table->string('site_title', 150);
            $table->string('logo', 100)->nullable();
            $table->string('fb_url', 150)->nullable();
            $table->string('tw_url', 150)->nullable();
            $table->string('ln_url', 150)->nullable();
            $table->string('yt_url', 150)->nullable();
            $table->string('in_url', 150)->nullable();
            $table->string('video_url', 150)->nullable();
            $table->string('contact_url', 255)->nullable();
            $table->string('contact_email', 255)->nullable();
            $table->string('contact_number', 150)->nullable();
            $table->string('contact_address',255)->nullable();
            $table->string('meta_title', 150)->nullable();
            $table->text('meta_description')->nullable();
            $table->nullableTimestamps();

            $table->foreignId('tenant_id')->constrained('tenants', 'tenant_id')->onDelete('cascade');
            $table->foreignId('created_by')->constrained('users', 'user_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms');
    }
}
