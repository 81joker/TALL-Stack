<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        // $users = User::all();
        //     Note::factory(10)->create([
        //     'title' => fake()->title(),
        //     // 'User::all()' => fake()->numberBetween($min = 1, $max = 10),
        //     'body' => fake()->text(),
        //     'send_date' => fake()->date(),
        //     'is_published' => fake()->boolean(),
        //     'heart_count' => rand(0, 1),
        //     // 'body' => fake()->paragraph(2),
        //     'user_id' => $users->first()->id,
        //     ]);
        User::all()->each(function (User $user) {
            Note::factory()->count(10)->create([
                'user_id' => $user->id,
            ]);
        });

        
    }
}
               
