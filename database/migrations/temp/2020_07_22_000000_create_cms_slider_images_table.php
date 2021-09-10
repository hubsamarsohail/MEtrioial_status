<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsSliderImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_slider_images', function (Blueprint $table) {
            $table->bigIncrements('cms_slider_image_id');
            $table->string('img_name', 100);
            $table->string('img_title', 50)->nullable();
            $table->string('img_description', 200)->nullable();
            $table->nullableTimestamps();

            $table->foreignId('cms_id')->nullable()->constrained('cms', 'cms_id')->onDelete('cascade');
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
        Schema::dropIfExists('cms_slider_images');
    }
}
