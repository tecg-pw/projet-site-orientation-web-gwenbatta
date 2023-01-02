<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(StatusSeeder::class);
        $this->call(StatusTranslationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ActualitySeeder::class);
        $this->call(ActualityTranslationSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(BookTranslationSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CourseTranslationSeeder::class);
        $this->call(CoordinateSeeder::class);
        $this->call(CoordinateTranslationSeeder::class);
        $this->call(DocSeeder::class);
        $this->call(DocTranslationSeeder::class);
        $this->call(GlossarySeeder::class);
        $this->call(GlossaryTranslationSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(PartnerTranslationSeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(PersonTranslationSeeder::class);
        $this->call(OfferSeeder::class);
        $this->call(OfferTranslationSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(LanguageTranslationSeeder::class);
        $this->call(LanguageOfferSeeder::class);
        $this->call(SoftwareSeeder::class);
        $this->call(SoftwareTranslationSeeder::class);
        $this->call(OfferSoftwareSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(ProjetTranslationSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TagTranslationSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(RecurringSeeder::class);
        $this->call(RecurringTranslationSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ToolSeeder::class);
        $this->call(ToolTranslationSeeder::class);
        $this->call(TutoSeeder::class);
        $this->call(TutoTranslationSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TestimonialTranslationSeeder::class);
        $this->call(OpportunitiesSeeder::class);
        $this->call(OpportunityTranslationSeeder::class);
        $this->call(CoursePersonSeeder::class);
        $this->call(CourseProjectSeeder::class);
        $this->call(CourseDocSeeder::class);
        $this->call(CourseToolSeeder::class);
        $this->call(BookCourseSeeder::class);
        $this->call(PartnerPersonSeeder::class);
        $this->call(TutoUserSeeder::class);
        $this->call(CommentUserSeeder::class);
        $this->call(ContactAgencySeeder::class);
        $this->call(ContactSeeder::class);
    }
}
