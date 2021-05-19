<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name'=>'Minnu',
        "email"=>"minnu@gmail.com",
        "place"=>"Kottayam",
        "mobile"=>"8129617819",
        "password"=>Hash::make("1234")
        ]);
    }
}
