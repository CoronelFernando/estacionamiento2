<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use DB;
use app\Status;
use Carbon\Carbon;
class PrincipalController extends Controller
{
    public function index(){
      $status = DB::table('estatus')->get();
      $usuarios = DB::table('usuarios')->get();
      $tiemposReservados = DB::table('tiemposReservados')->get();
      //dd($tiemposReservados);
      return view('pagesweb/administrador/principal', ['status' => $status, 'usuarios' => $usuarios, 'tiemposReservados' => $tiemposReservados]);
    }
}