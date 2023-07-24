<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 100; $i++) {
            Note::create([
                'id' => Str::uuid(),
                'user_id' => 1,
                'title' => 'Nota ' . $i,
                'content' => $faker->paragraph(5),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
