@extends('layout.site')

@section('titulo', 'Produtos')

@section('conteudo')
<div class="container">
<div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Cursos</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('admin.produtos.adicionar') }}">
                    Adicionar
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if(!empty($mensagem))
                    <div class="alert alert-success">
                        {{ $mensagem }}
                    </div>
                @endif
            </div>

        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Conteúdo</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Ações</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->conteudo }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td><img width="70" src="{{asset($produto->imagem)}}"></td>
                            <td>{{ $produto->categoria }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{route('admin.produtos.editar', $produto->id)}}">
                                    Editar</a>
                            </td>
                            <td>
                                <form action="{{route('admin.produtos.deletar', $produto->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <!-- <input type="submit" name="excluir" value="delete" class="btn btn-danger"> -->
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
