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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstname');
            $table->string('slug');
            $table->string('status');
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->string('link_portfolio')->nullable();
            $table->string('link_github');
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('mail');
            $table->string('job')->nullable();
            $table->json('gallery')->nullable();
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
        Schema::dropIfExists('people');
    }
};
