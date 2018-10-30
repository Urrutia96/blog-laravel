<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ArticuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articulos')->insert(array(
            0 => array(
                'categoria_id' => 1,
                'user_id'=> 1,
                'img'=> 'public/articulos/laravel-5-7.jpeg',
                'titulo'=> 'Laravel 5.7',
                'slug' => 'laravel-57',
                'cuerpo'=>'Contenido del articulo',
                'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
            ),
        ));
    }
}
