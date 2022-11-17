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
        Schema::table('answers', function (Blueprint $table) {
            $table->foreignId('comment_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('answers', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('subject_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('offers', function (Blueprint $table) {
            $table->foreignId('partner_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('subjects', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });



        Schema::table('book_classe', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained()->onUpdate('cascade');
            $table->foreignId('classe_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('classe_doc', function (Blueprint $table) {
            $table->foreignId('doc_id')->constrained()->onUpdate('cascade');
            $table->foreignId('classe_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('classe_person', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained()->onUpdate('cascade');
            $table->foreignId('classe_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('classe_project', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained()->onUpdate('cascade');
            $table->foreignId('classe_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('classe_tool', function (Blueprint $table) {
            $table->foreignId('tool_id')->constrained()->onUpdate('cascade');
            $table->foreignId('classe_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('tuto_user', function (Blueprint $table) {
            $table->foreignId('tuto_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_foreign_keys_columns');
    }
};
