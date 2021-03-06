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

        factory('App\User')->create([
            'name' => "Marcelo",
            'email' => "marcelofreitas21@hotmail.com",
            'password' => bcrypt("010485"),
            'remember_token' => str_random(10),
        ]);

        $this->call(PostTableSeeder::class);
        $this->call(TagTableSeeder::class);

        Model::reguard();
    }
}
