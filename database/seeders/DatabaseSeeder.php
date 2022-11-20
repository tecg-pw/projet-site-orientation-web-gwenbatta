<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Answer;
use App\Models\Glossary;
use Illuminate\Database\Seeder;
use PhpParser\Comment;

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
        $this->call(UserSeeder::class);
        $this->call(ActualitySeeder::class);
        $this->call(BookSeeder::class);
        $this->call(ClasseSeeder::class);
        $this->call(DocSeeder::class);
        $this->call(GlossarySeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(OfferSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(ToolSeeder::class);
        $this->call(TutoSeeder::class);
        $this->call(OpportunitiesSeeder::class);
    }
}
