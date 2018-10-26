<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Articulo;

class AdminController extends Controller
{
    public function index(Request $request){
        $articulos = Articulo::paginate(6);
        return view('admin.welcome', compact('articulos'));
    }
}
