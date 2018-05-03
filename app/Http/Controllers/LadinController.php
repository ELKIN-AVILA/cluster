<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use Illuminate\Support\Facades\DB;

class LadinController extends Controller
{
    public function index(){
        $ar =DB::table('articulo')->paginate(9);
        return view('vendor.adminlte.layouts.landing')->with('art',$ar);
    }
}
