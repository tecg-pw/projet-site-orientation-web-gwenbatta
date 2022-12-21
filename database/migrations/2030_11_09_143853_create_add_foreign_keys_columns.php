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

        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('subject_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('offers', function (Blueprint $table) {
            $table->foreignId('partner_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('projecttranslations', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained('people')->onUpdate('cascade');
        });
        Schema::table('subjects', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            $table->foreignId('tag_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('testimonials', function (Blueprint $table) {
            $table->foreignId('people_id')->constrained('people')->onUpdate('cascade');
        });


        Schema::table('actualitytranslations', function (Blueprint $table) {
            $table->foreignId('actuality_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('tagtranslations', function (Blueprint $table) {
            $table->foreignId('tag_id')->constrained()->onUpdate('cascade');
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
            $table->foreignId('people_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('glossarytranslations', function (Blueprint $table) {
            $table->foreignId('glossary_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('languagetranslations', function (Blueprint $table) {
            $table->foreignId('language_id')->constrained()->onUpdate('cascade');
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
        Schema::table('language_offer', function (Blueprint $table) {
            $table->foreignId('language_id')->constrained()->onUpdate('cascade');
            $table->foreignId('offer_id')->constrained()->onUpdate('cascade');
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


        Schema::table('comments', function (Blueprint $table) {
            $table->$table->dropConstrainedForeignId('subject_id');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user_id');
        });
        Schema::table('offers', function (Blueprint $table) {
            $table->$table->dropConstrainedForeignId('partner_id');
        });
        Schema::table('projecttranslations',function (Blueprint $table){
            $table->dropConstrainedForeignId('person_id');
        });
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user_id');
            $table->dropConstrainedForeignId('tag_id');
        });
        Schema::table('testimonialtranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('person_id');
        });


        Schema::table('actualitytranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('actuality_id');
        });
        Schema::table('tagtranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('tag_id');
        });
        Schema::table('booktranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('book_id');
        });
        Schema::table('coursetranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('course_id');
        });
        Schema::table('coordinatetranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('coordinate_id');
        });
        Schema::table('doctranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('doc_id');
        });
        Schema::table('offertranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('offer_id');
        });
        Schema::table('partnertranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('partner_id');
        });
        Schema::table('projecttranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('project_id');
        });
        Schema::table('testimonialtranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('testimonial_id');
        });
        Schema::table('tooltranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('tool_id');
        });
        Schema::table('tutotranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('tuto_id');
        });
        Schema::table('recurringtranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('recurring_id');
        });
        Schema::table('persontranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('people_id');
        });
        Schema::table('glossarytranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('glossary_id');
        });
        Schema::table('opportunitytranslations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('opportunity_id');
        });

        Schema::table('book_course', function (Blueprint $table) {
            $table->dropConstrainedForeignId('book_id');
            $table->dropConstrainedForeignId('course_id');
        });
        Schema::table('course_doc', function (Blueprint $table) {
            $table->dropConstrainedForeignId('doc_id');
            $table->dropConstrainedForeignId('course_id');
        });
        Schema::table('course_person', function (Blueprint $table) {
            $table->dropConstrainedForeignId('people_id');
            $table->dropConstrainedForeignId('course_id');
        });
        Schema::table('course_project', function (Blueprint $table) {
            $table->dropConstrainedForeignId('project_id');
            $table->dropConstrainedForeignId('course_id');
        });
        Schema::table('course_tool', function (Blueprint $table) {
            $table->dropConstrainedForeignId('tool_id');
            $table->dropConstrainedForeignId('course_id');
        });
        Schema::table('partner_person', function (Blueprint $table) {
            $table->dropConstrainedForeignId('people_id');
            $table->dropConstrainedForeignId('partner_id');
        });
        Schema::table('tuto_user', function (Blueprint $table) {
            $table->dropConstrainedForeignId('tuto_id');
            $table->dropConstrainedForeignId('user_id');
        });
    }
};
