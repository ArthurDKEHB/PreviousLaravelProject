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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'username' => 'admin',
            'biography' => $this->faker->text,
            'date_of_birth' => $this->faker->datetime,
            'email_verified_at' => now()
        ]);

        DB::table('users')->insert([
            'user_id' => User::factory(),
            'title' => $this->faker->word,
            'body' => $this->faker->text

        ]);
    }
}
