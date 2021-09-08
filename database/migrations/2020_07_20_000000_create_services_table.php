<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('service_id');
            $table->string('title', 50);
            $table->string('img', 75)->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->nullableTimestamps();

            $table->foreignId('parent_service_id')->nullable()->constrained('pages', 'page_id')->onDelete('cascade');
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
        Schema::dropIfExists('services');
    }
}
