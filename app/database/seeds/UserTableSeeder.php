<?php

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');

        $user = array(
            'first_name'  => 'User 1',
            'last_name'  => 'Admin',
            'activated'     => 1,
            'email'      => 'admin@example.com',
            'password'   => Hash::make('password'),
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
            'activated_at' => $dateTime,
        );
        $user = User::create( $user );

        $user2 = array(
            'first_name'  => 'Test',
            'last_name'  => 'Two',
            'activated'     => 1,
            'email'      => 'user2@gmail.com',
            'password'   => Hash::make('password'),
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
            'activated_at' => $dateTime,
        );

        $user2 = User::create( $user2 );
    }

}
