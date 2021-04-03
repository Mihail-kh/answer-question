<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersQuestionsAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->delete();
        DB::table('questions')->delete();
        DB::table('users')->delete();

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
