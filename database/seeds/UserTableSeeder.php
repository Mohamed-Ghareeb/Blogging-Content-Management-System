<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = App\User::create([

    		'name' 		=> 'Mohamed Ghareeb',
    		'email' 	=> 'Mohamed@m.me',
    		'password'  => bcrypt('123123'),
            'admin'     => 1
    	]);

        App\Profile::create([

            'user_id'   => $user->id,
            'avatar'   => 'uploads/avatar/1.jpg',
            'about'     => 'My Name Mohamed Ghareeb',
            'facebook'  => 'https://www.facebook.com',
            'youtube'  => 'https://www.youtube.com'
        ]);
    }
}
