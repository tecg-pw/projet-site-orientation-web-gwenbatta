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
        Schema::table('offertranslations', function (Blueprint $table) {
            $table->foreignId('partner_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('projecttranslations', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('subjects', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('testimonialtranslations', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained()->onUpdate('cascade');
        });


        Schema::table('actualitytranslations', function (Blueprint $table) {
            $table->foreignId('actuality_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('booktranslations', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('coursetranslations', function (Blueprint $table) {
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('coordinatetranslations', function (Blueprint $table) {
            $table->foreignId('coordinate_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('doctranslations', function (Blueprint $table) {
            $table->foreignId('doc_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('offertranslations', function (Blueprint $table) {
            $table->foreignId('offer_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('partnertranslations', function (Blueprint $table) {
            $table->foreignId('partner_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('projecttranslations', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('testimonialtranslations', function (Blueprint $table) {
            $table->foreignId('testimonial_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('tooltranslations', function (Blueprint $table) {
            $table->foreignId('tool_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('tutotranslations', function (Blueprint $table) {
            $table->foreignId('tuto_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('recurringtranslations', function (Blueprint $table) {
            $table->foreignId('recurring_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('persontranslations', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('glossarytranslations', function (Blueprint $table) {
            $table->foreignId('glossary_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('opportunitytranslations', function (Blueprint $table) {
            $table->foreignId('opportunity_id')->constrained()->onUpdate('cascade');
        });





        Schema::table('book_course', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained()->onUpdate('cascade');
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('course_doc', function (Blueprint $table) {
            $table->foreignId('doc_id')->constrained()->onUpdate('cascade');
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('course_person', function (Blueprint $table) {
            $table->foreignId('people_id')->constrained()->onUpdate('cascade');
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('course_project', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained()->onUpdate('cascade');
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('course_tool', function (Blueprint $table) {
            $table->foreignId('tool_id')->constrained()->onUpdate('cascade');
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('partner_person', function (Blueprint $table) {
            $table->foreignId('people_id')->constrained()->onUpdate('cascade');
            $table->foreignId('partner_id')->constrained()->onUpdate('cascade');
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
