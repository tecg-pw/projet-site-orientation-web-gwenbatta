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
            $table->string('name');
            $table->string('firstname');
            $table->string('slug');
            $table->string('status');
            $table->boolean('isTeacher')->default(false);
            $table->string('avatar')->nullable();
            $table->json('avatars')->nullable();
            $table->json('srcset')->nullable();
            $table->string('locale');
            $table->text('description')->nullable();
            $table->string('link_portfolio')->nullable();
            $table->string('link_github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('mail');
            $table->string('job')->nullable();
            $table->string('job_slug')->nullable();
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
