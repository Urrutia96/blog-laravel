<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categoria_id', 'user_id', 'user_id', 'img', 'titulo', 'slug', 'cuerpo',
    ];

    /**
     * Relacion con la tabla Users
     * 
     * @return \App\User
     */
    public function user(){
        return $this->belongsTo(\App\User::class);
    }

    /**
     * Relacion con la tabla Categoria
     * 
     * @return \App\Categoria
     */
    public function categoria(){
        return $this->belongsTo(\App\Categoria::class);
    }
}
