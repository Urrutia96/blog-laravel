<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Articulo;

class HomeController extends Controller
{
    //

    /**
     * 
     * 
     * 
     */
    public function index(Request $request){
        $categorias = Categoria::select('nombre','id')->get();
        if($request->slug){
            $articulo = Articulo::where('slug',$request->slug)->first();            
            return view('detalles',compact('categorias','articulo'));
        }
        $articulos = Articulo::with('categoria','user')->paginate(3);
        return view('welcome', compact('categorias','articulos'));
    }

    /**
     * 
     * 
     * 
     */
    public function categoria(Request $request){
        $categorias = Categoria::select('nombre','id')->get();
        $categoria = Categoria::where('nombre',$request->categoria)->first();
        $articulos = Articulo::where('categoria_id',$categoria->id)->paginate(4);
        return view('welcome', compact('categorias','articulos','categoria'));
    }

    /**
     * 
     * 
     * 
     */
    public function user(Request $request){
        $user = User::where('nickname',$request->user)->first();
        $categorias = Categoria::select('nombre','id')->get();
        $articulos = $user->articulos;
        return view('welcome', compact('categorias','articulos','user'));
    }
}
