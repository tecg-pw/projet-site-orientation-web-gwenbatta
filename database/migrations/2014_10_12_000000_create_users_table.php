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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstname');
            $table->string('slug')->unique();
            $table->string('avatar')->default("img-redimensions/person-180x180.png");
            $table->json('avatars')->nullable();
            $table->json('srcset')->nullable();
            $table->string('back_image')->default("img-redimensions/dummy_2560x600_ffffff_cccccc.png");
            $table->json('srcset_back')->nullable();
            $table->json('back_images')->nullable();
            $table->string('email')->unique();
            $table->boolean('is_admin')->default(false);
            $table->boolean('newsletter')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('description')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
