<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Glossary;
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
        $this->call(ActualitySeeder::class);
        $this->call(BookSeeder::class);
        $this->call(ClasseSeeder::class);
        $this->call(DocSeeder::class);
        $this->call(GlossarySeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(OfferSeeder::class);
        $this->call(ToolSeeder::class);
        $this->call(TutoSeeder::class);
    }
}
