<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //Carrega home do site
    public function index(){
        return view('home', [
            'produtos' => DB::table('produtos')->get()
        ]);
    }
}
