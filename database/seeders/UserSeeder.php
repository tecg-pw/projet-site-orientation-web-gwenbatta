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
            User::create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "avatar" => $value->avatar,
                "email" => $value->email,
                "is_admin" => $value->is_admin,
                "email_verified_at" => $value->email_verified_at,
                "password" => $value->password,
            ]);
        }
    }
}
