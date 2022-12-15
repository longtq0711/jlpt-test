<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserAnswer::factory(1000)->create();
    }
}
