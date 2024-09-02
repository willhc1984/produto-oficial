<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //Carrega formulario cadastrar produto
    public function create()
    {
        return view('produtos.create');
    }

    //Grava produto no banco de dados
    public function store(){
        dd("hello world!");
    }
}
