<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
//use Faker\Factory as Faker;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*
        User::factory()
        ->times(50)
        ->create();
       
*/

       /* $faker = Faker::create();
        foreach(range(1,19)as $index){

            DB::table('users')->insert([
                'name' => $faker->sentence(5),
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('my123'),
                'remember_token' => Str::random(10),
            ]);
            */
        
        
       

        User::create([
            'name' => 'Samantha12',
            'email' => 'samantha12@gmail.com',
            'password' => Hash::make('password1'),
            'remember_token' => Str::random(10),
        ]);
}

    }

