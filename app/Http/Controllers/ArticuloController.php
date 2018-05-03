<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\User;
use Illuminate\Support\Facades\DB;
use App\http\Requests;


class ArticuloController extends Controller
{
    public function index(){
        $art = DB::table('articulo')->paginate(8);
        $user = User::all();        
        return view('Articulo.index')->with('art',$art,'user',$user);    
    }
    public function nuevo(Request $res){
        $Art = new articulo();
        $Art->titulo = $res->titulo;
        $Art->contenido = $res->contenido;
        $Art->id_user = $res->user;
        $Art->save();
        return response()->json($Art);
    }
}
