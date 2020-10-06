@extends('layout.site')

@section('titulo', 'Editar Contratos')


@section('conteudo')
    <div class="container">
        <h3>Editar Contratos</h3>
        <div class="row">
            <form action="{{route('admin.contratos.atualizar', $item->id_contrato)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">      <!-- Esse input não é visível para o usuário -- Serve para tratar o formulário post para que ele possa fazer o put, que ´e atualizar -->
                @include('admin.contratos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
