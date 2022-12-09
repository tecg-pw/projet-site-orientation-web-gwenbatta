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
        Schema::create('partnertranslations', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->json('slug');
            $table->json('locale');
            $table->json('mail')->nullable();
            $table->json('logo')->nullable();
            $table->json('adresse');
            $table->json('locality');
            $table->json('locality_number');
            $table->json('description')->nullable();
            $table->json('site_link');
            $table->json('link_facebook')->nullable();
            $table->json('link_linkedin')->nullable();
            $table->json('link_instagram')->nullable();
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
        Schema::dropIfExists('partnertranslations');
    }
};
