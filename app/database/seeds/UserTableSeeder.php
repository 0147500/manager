<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = Sentry::createUser(array(
            'email'     => 'robert.scholts@gmail.com',
            'password'  => 'robert',
            'activated' => true,
        ));

    }

}