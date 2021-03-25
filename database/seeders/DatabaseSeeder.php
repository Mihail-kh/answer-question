<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
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
        User::factory(3)->create()->each(function ($user) {
            $questions = Question::factory(mt_rand(5, 10))->make();
            $user->questions()->saveMany($questions)
                ->each(function ($q) {
                    $answers = Answer::factory(rand(1, 5))->make();
                    $q->answers()->saveMany($answers);
                });
        });

    }
}
