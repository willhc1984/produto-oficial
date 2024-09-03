<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //Listar produtos no adm
    public function index()
    {
        $produtos = Produto::orderBy('titulo')->paginate(10);
        return view('produtos.index', [
            'produtos' => $produtos
        ]);
    }

    //Carrega formulario cadastrar produto
    public function create()
    {
        return view('produtos.create');
    }

    //Grava produto no banco de dados
    public function store(Request $request){
        $file_name = rand(0,999999) . '-' . $request->file('imagem')->getClientOriginalName();
        $path = $request->file('imagem')->storeAs('img', $file_name);
        
        $data = $request->all();
        $data['foto'] = $path;

        Produto::create($data);

        return redirect()->route('home.index');
    }
}
