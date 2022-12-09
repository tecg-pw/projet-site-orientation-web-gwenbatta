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
        Schema::create('coordinatetranslations', function (Blueprint $table) {
            $table->id();
            $table->json('locale');
            $table->json('organization');
            $table->json('employee_name');
            $table->json('employee_firstname');
            $table->json('phone');
            $table->json('mail');
            $table->json('job');
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
        Schema::dropIfExists('coordinatetranslations');
    }
};
