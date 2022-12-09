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
        Schema::create('actualitytranslations', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->json('slug');
            $table->json('locale');
            $table->json('excerpt');
            $table->json('description');
            $table->json('lieu');
            $table->json('link');
            $table->json('main_picture');
            $table->json('gallery')->nullable();
            $table->timestamps();
            $table->timestamp('date')->nullable()->index();
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
        Schema::dropIfExists('actualitytranslations');
    }
};
