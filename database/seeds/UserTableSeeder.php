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
                'email' => 'urrutia96@test.com',
                'name'=>'Santos Osmin Urrutia',
                'password' => Hash::make('123456'),
                'nickname'=> 'santos',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ),
            1 => array(
                'email' => 'prueba@test.com',
                'name'=>'prueba',
                'password' => Hash::make('123456'),
                'nickname'=> 'prueba',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ),
            2 => array(
                'email' => 'luffy@test.com',
                'name'=>'Monkey D. Luffy',
                'password' => Hash::make('123456'),
                'nickname'=> 'luffy',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ),
        ));
    }
}
