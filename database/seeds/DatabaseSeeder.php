<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call(UserTableSeeder::class);
        factory('App\User', 5)->create();
        factory('App\Product', 5)->create();

        factory(App\User::class)->create([
            'name' => 'user test',
            'email' => 'test@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make("password")
            //'remember_token' => str_random(10)
        ]);
        Model::reguard();

        //the cliend_id : f3d259ddd3ed8ff3843839b
        //client_secret : 4c7f6f8fa93d59c45502c0ae8c4a95b
        //INSERT INTO `oauth_clients` (`id`, `secret`, `name`, `created_at`, `updated_at`) VALUES ('f3d259ddd3ed8ff3843839b', '4c7f6f8fa93d59c45502c0ae8c4a95b', 'Main apirestfull laravel5.1', '2016-11-07 00:00:00', '2016-11-07 00:00:00');
    }
}
