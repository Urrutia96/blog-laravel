<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Articulo;

class AdminController extends Controller
{

    /**
     * 
     * 
     * 
     * 
     */
    public function index(Request $request){
        $articulos = Articulo::paginate(6);
        return view('admin.welcome', compact('articulos'));
    }

    /**
     * 
     * 
     * 
     * 
     */
    public function formPost($id = null,Request $request){
        $categorias = Categoria::all();
        if($request->id){
            $articulo = Articulo::where('id', $request->id)->where('user_id',1)->first();
            return view('admin.formPost',compact('categorias','articulo'));
        }
        return view('admin.formPost',compact('categorias'));
    }

    /**
     * 
     * 
     * 
     */
    public function store(Request $request){
        $articulo = new Articulo();
        $articulo->titulo = $request->titulo;
        $articulo->categoria_id = $request->categoria;
        $articulo->user_id = 1;
        $articulo->slug = str_slug($request->titulo,'-');
        $articulo->img = $request->file('img')->store('/public/articulos');
        $articulo->cuerpo = $request->cuerpo;
        if($articulo->save()){
            return redirect()->route('admin.index')->with('message', 'Articulo publicado correctamente');
        }
        return redirect()->route('admin.new')->withInput()->with('message','Porfavor revise bien los datos'); 
    }

    /**
     * 
     * 
     * 
     */
    public function edit(Request $request){
        $articulo = Articulo::where('id', $request->id)->first();
        $articulo->titulo = $request->titulo;
        $articulo->categoria_id = $request->categoria;
        $articulo->user_id = 1;
        $articulo->slug = str_slug($request->titulo,'-');
        if($request->hasFile('img')){
            $articulo->img = $request->file('img')->store('/public/articulos');
        }
        $articulo->cuerpo = $request->cuerpo;
        if($articulo->save()){
            return redirect()->route('admin.index')->with('message', 'Articulo Modificado correctamente');
        }
        return redirect()->route('admin.showEdit',$articulo->id)->withInput()->with('message','Porfavor revise bien los datos');
    }

    /**
     * 
     * 
     * 
     */
    public function delete(Request $request){
        if(Articulo::where('id',$request->id)->first()->delete()){
            return redirect()->route('admin.index')->with('message', 'Articulo Eliminado');
        }
        return redirect()->route('admin.index')->with('message', 'No se pudo eliminar el articulo');
    }

}
