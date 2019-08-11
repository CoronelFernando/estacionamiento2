<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class EstadisticaCajonController extends Controller
{
    public function index(){
        $secciones = DB::table('secciones')->get();
        $usuarios = DB::table('usuarios')->get();

        return view('pagesweb/administrator/statistics', ['secciones'=> $secciones, 'usuarios' => $usuarios]);
    }
  
    public function create(){
  
    }
  
    public function show(){
  
    }
  
    public function edit(){
  
    }
  
    public function store(){
  
    }
  
    public function update(){
  
    }
    public function destroy(){
  
    }
}
