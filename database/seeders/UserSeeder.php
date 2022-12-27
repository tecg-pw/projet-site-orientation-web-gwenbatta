<?php

namespace Database\Seeders;

use App\Models\User;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/users.json");
        $users = json_decode($json);

        foreach ($users as $key => $value) {
            User::factory()->create([
                "name" => $value->name,
                "firstname" => $value->firstname,
                "slug" => \Str::slug($value->firstname.$value->name),
                "avatar" => $value->avatar,
                "avatar_thumb" => $value->avatar_thumb,
                "back_image" => $value->back_image,
                "email" => $value->email,
                "is_admin" => $value->is_admin,
                "email_verified_at" => $value->email_verified_at,
                "password" => password_hash('change_this',PASSWORD_DEFAULT),
                "status_id"=>$value->status_id
            ]);
        }
    }
}
