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
            $table->string('name');
            $table->string('slug');
            $table->string('locale');
            $table->text('excerpt');
            $table->text('description');
            $table->string('lieu');
            $table->string('link');
            $table->string('main_picture')->nullable();
            $table->json('pictures')->nullable();
            $table->json('srcset')->nullable();
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
