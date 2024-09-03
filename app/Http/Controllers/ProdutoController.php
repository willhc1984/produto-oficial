<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store(ProdutoRequest $request)
    {

        $request->validated();

        $file_name = rand(0, 999999) . '-' . $request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('img', $file_name);

        $data = $request->all();
        $data['foto'] = $path;

        Produto::create($data);

        //Redireciona com msg de sucesso
        return redirect()->route('produto.index')->with('success', 'Produto cadastrado!');
    }

    //Carregar formulario para editar produto
    public function edit(Produto $produto)
    {
        return view('produtos.edit', [
            'produto' => $produto
        ]);
    }

    //Atualiza produto no banco de dados
    public function update(ProdutoRequest $request, Produto $produto)
    {
        //Valida formulario
        $request->validated();

        $file_name = rand(0, 999999) . '-' . $request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('img', $file_name);

        //Marca inicio da transação
        DB::beginTransaction();

        try {
            $produto->update([
                'titulo' => $request->titulo,
                'descricao' => $request->descricao,
                'link' => $request->link,
                'foto' => $path
            ]);

            //Operação concluida com exito
            DB::commit();

            //Redireciona com msg de sucesso
            return redirect()->route('produto.index')->with('success', 'Produto editado!');
        } catch (Exception $e) {
            //Operação não concluida
            DB::rollBack();
            //Retorno com mensagem de erro
            return back()->withInput()->with('error', 'Produto não atualizado! Tente novamente');
        }
    }
}
