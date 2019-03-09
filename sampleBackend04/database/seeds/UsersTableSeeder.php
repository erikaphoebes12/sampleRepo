<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first

       $faker = \Faker\Factory::create(pt_BR);

       // Let's make sure everyone has the same password and 
       // let's hash it before the loop, or else our seeder 
       // will be too slow.
       $password = Hash::make('toptal');


       // And now let's generate a few dozen users for our app:
       for ($i = 0; $i < 25; $i++) {
           DB::table('Users')->insert([
               'firstname' => $faker->firstname,
               'lastname' => $faker->lastname,
               'contactno1' => $faker->cellphone,
               'contactno2' => $faker->cellphone,
               'email' => $faker->email,
               'email_verified_at' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
               'password' => bcrypt('secret'),
               'remember_token' => Str::random(10),
               'created_at' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
               'updated_at' =>$faker->dateTimeThisMonth($max = 'now', $timezone = null),
           ]);
       }
    }
}
