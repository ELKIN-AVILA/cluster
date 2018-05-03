<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\http\Requests;


class ArchivosController extends Controller
{
    public function index(){
        return view('Archivos.index');
    }
    public function nuevo(Request $res){

        Storage::disk('google')->put('image.png', $res->file);
        return response()->json('aa');
    }
}
