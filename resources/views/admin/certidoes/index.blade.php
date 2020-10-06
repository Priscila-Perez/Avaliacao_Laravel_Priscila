@extends('layout.site')

@section('titulo', 'Certidões')

@section('conteudo')
<div class="container">
<div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Certidões</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('admin.certidoes.adicionar') }}">
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
                        <th scope="col">Tipo</th>
                        <th scope="col">Envolvido 1</th>
                        <th scope="col">Envolvido 2</th>
                        <th scope="col">Data da Certidão</th>
                        <th scope="col">Tabelião</th>
                        <th scope="col">Acões</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itens as $item)
                        <tr>
                            <td>{{ $item->id_certidao }}</td>
                            <td>{{ $item->tipo_certidao }}</td>
                            <td>{{ $item->nome_envolvido_1 }}</td>
                            <td>{{ $item->nome_envolvido_2 }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->data_certidao)->format('d/m/Y') }}</td>
                            <td>{{ $item->nome_tabeliao }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{route('admin.certidoes.editar', $item->id_certidao)}}">
                                    Editar</a>
                           
                                <form action="{{route('admin.certidoes.deletar', $item->id_certidao)}}" method="post"> 
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
