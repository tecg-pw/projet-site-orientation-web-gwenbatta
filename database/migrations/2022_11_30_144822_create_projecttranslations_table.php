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
            $table->string('title');
            $table->string('locale');
            $table->string('slug');
            $table->text('description');
            $table->string('link_project');
            $table->string('link_github');
            $table->timestamp('date')->nullable()->index();
            $table->string('main_picture')->nullable();
            $table->json('pictures')->nullable();
            $table->json('srcset')->nullable();
            $table->string('gallery_vertical_1')->nullable();
            $table->json('srcset_gallery_vertical_1')->nullable();
            $table->string('gallery_vertical_2')->nullable();
            $table->json('srcset_gallery_vertical_2')->nullable();
            $table->string('gallery_large')->nullable();
            $table->json('srcset_gallery_large')->nullable();
            $table->string('gallery_small_1')->nullable();
            $table->json('srcset_gallery_small_1')->nullable();
            $table->string('gallery_small_2')->nullable();
            $table->json('srcset_gallery_small_2')->nullable();
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
