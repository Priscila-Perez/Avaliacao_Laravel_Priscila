@extends('layout.site')

@section('titulo', 'Tabeliões')

@section('conteudo')
<div class="container">
<div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Tabeliões</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('admin.tabelioes.adicionar') }}">
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
                        <th scope="col">Nome</th>
                      
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itens as $item)
                        <tr>
                            <td>{{ $item->id_tabeliao}}</td>
                            <td>{{ $item->nome }}</td>
                            
                            <td>
                                <a class="btn btn-primary"
                                    href="{{route('admin.tabelioes.editar', $item->id_tabeliao)}}">
                                    Editar</a>
                            
                                <form action="{{route('admin.tabelioes.deletar', $item->id_tabeliao)}}" method="post"> 
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
