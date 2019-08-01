<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use app\Status;
use carbon\Carbon;
class PrincipalController extends Controller
{
    public function index(){
        $status = DB::table('estatus')->get();
        $usuarios = DB::table('usuarios')->get();
        $tiemposReservados = DB::table('tiemposReservados')->get();

        return view('pagesweb/administrator/principal',['status' => $status, 'usuarios' => $usuarios, 'tiemposReservador' => $tiemposReservados]);
    }

}