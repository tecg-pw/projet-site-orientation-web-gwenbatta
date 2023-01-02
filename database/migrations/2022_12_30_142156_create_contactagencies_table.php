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
        Schema::create('contactagencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_supervisor');
            $table->string('email');
            $table->string('subject');
            $table->string('pdf')->nullable();
            $table->text('message');
            $table->json('softwares')->nullable();
            $table->json('languages')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactagencies');
    }
};
