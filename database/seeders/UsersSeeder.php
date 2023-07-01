<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Aris Afriyanto',
                'username' => 'arisafriyanto',
                'email' => 'aris@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fitri Awalia',
                'username' => 'fitriawalia',
                'email' => 'fitri@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => now(),
            ]
        ])->each(function ($user) {
            DB::table('users')->insert($user);
        });
    }
}
