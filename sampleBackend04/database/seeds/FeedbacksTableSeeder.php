<?php

use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.

        $faker = \Faker\Factory::create();

        //$limit = 25;
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 25; $i++) {
            DB::table('Feedbacks')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'contactno1' => $faker->phoneNumber,
                'feedbackType' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
                'message' => $faker->paragraph,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->datetime,
            ]);
        }
    }
}
