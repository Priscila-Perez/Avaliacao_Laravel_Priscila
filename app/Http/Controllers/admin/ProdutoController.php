<?php

namespace App\Http\Controllers\admin;

use App\Produto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index (Request $req)
    {
        $produtos = Produto::all();
        $mensagem = $req->session()->get('mensagem');
        return view('admin.produtos.index', compact('produtos', 'mensagem'));
    }

    public function adicionar() //Referente à view onde o produto é add
    {
        return view('admin.produtos.adicionar');

    }

    public function salvar(Request $req)
    {
        $produto = $req->all();

       

        if ($req->hasFile('imagem')) {
            $produto['imagem'] = $this->tratarImagem($req, $produto);
        }

        Produto::create($produto);

        $req->session()
            ->flash(
                'mensagem', //nome da varável
                "$req->descricao adicionado com sucesso!" //mensagem da variável
            );

        return redirect()->route('admin.produtos');
    }

    public function editar($id)
    {
        $produto = Produto::find($id); //método pronto que tem um select
        return view('admin.produtos.editar', compact('produto'));
    }

    public function atualizar(Request $req, $id)
    {
        $produto = $req->all();

        if ($req->hasFile('imagem')) {
            $produto['imagem'] = $this->tratarImagem($req, $produto);
        }

        $produtoSelecionado = Produto::find($id);
        $produtoSelecionado->update($produto);

        $req->session()
            ->flash(
                'mensagem', //nome da varável
                "$produtoSelecionado->descricao atualizado com sucesso!" //mensagem da variável
            );

        return redirect()->route('admin.produtos');
    }

    public function deletar(Request $req, $id)
    {

        $produto = Produto::find($id);
        $produto->delete();

        $req->session()
            ->flash(
                'mensagem', //nome da varável
                "$produto->descricao deletado com sucesso!" //mensagem da variável
            );

        return redirect()->route('admin.produtos');
    }

    public function tratarImagem(Request $req, $curso)
    {
        $imagem = $req->file('imagem'); //se a requisição tiver arquivo
        $num = rand(1111, 9999); // vai gerar um numero aleatório entre esses valores
        $dir = 'img/produtos/';
        $ext = $imagem->guessClientExtension(); // pega a exyensão do arquivo que o usuário subiu
        $nomeImagem = 'imagem_' . $num . '.' . $ext;
        $imagem->move($dir, $nomeImagem);

        return $dir . $nomeImagem;        
    }
}
