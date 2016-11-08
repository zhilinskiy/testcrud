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
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'login' => $faker->userName,
                'group_id' => $faker->numberBetween(1, 10),
                'email' => $faker->email,
                'expiration_date_time' => $faker->$dateTime,
                'password' => bcrypt('secret')
            ]);
        }
    }
}
