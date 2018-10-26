<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(array(
            0 => array(
                'email' => 'test@test.com',
                'name'=>'Santos Osmin Urrutia',
                'password' => Hash::make('123456'),
                'nickname'=> 'santos',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            )
        ));
    }
}
