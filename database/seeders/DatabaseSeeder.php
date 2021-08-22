<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'username' => 'admin',
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'biography' => $this->faker->text,
        //     'date_of_birth' => $this->faker->datetime,
        //     'email_verified_at' => now(),
        //     'is_admin' => false
        // ]);

        // DB::table('users')->insert([
        //     'user_id' => User::factory(),
        //     'title' => $this->faker->word,
        //     'body' => $this->faker->text

        // ]);

        \App\Models\User::factory(1)->create(['username' => 'admin','name' => 'admin','email' => "admin@gmail.com", 'password' => Hash::make('123456'), 'is_admin' => true]);
        \App\Models\User::factory(1)->create(['username' => 'guest','name' => 'guest','email' => "guest@gmail.com", 'password' => Hash::make('123456'), 'is_admin' => false]);
        \App\Models\User::factory(5)->create();
        \App\Models\Category::factory(3)->create();
        \App\Models\Post::factory(10)->create();
    }
}
