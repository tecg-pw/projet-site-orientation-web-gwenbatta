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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('mail');
            $table->string('logo')->nullable();
            $table->string('adresse');
            $table->string('locality');
            $table->text('description')->nullable();
            $table->string('site_link');
            $table->string('link_github')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->string('link_instagram')->nullable();
            $table->json('members')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('partners');
    }
};
