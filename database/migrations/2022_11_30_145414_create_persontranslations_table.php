<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persontranslations', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->json('firstname');
            $table->json('slug');
            $table->json('status');
            $table->boolean('isTeacher')->default(false);
            $table->json('avatar')->nullable();
            $table->json('locale');
            $table->json('description')->nullable();
            $table->json('link_portfolio')->nullable();
            $table->json('link_github');
            $table->json('linkedin')->nullable();
            $table->json('instagram')->nullable();
            $table->json('mail');
            $table->json('job')->nullable();
            $table->json('job_slug')->nullable();
            $table->timestamps();
            $table->timestamp('begin');
            $table->timestamp('end')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persontranslations');
    }
};
