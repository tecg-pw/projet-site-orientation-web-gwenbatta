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
        Schema::create('projecttranslations', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('locale');
            $table->json('slug');
            $table->json('description');
            $table->json('link_project');
            $table->json('link_github');
            $table->timestamp('date')->nullable()->index();
            $table->json('main_picture')->nullable();
            $table->json('gallery')->nullable();
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
        Schema::dropIfExists('projecttranslations');
    }
};
