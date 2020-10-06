@extends('layout.site')

@section('titulo', 'Editar Certidão')


@section('conteudo')
    <div class="container">
        <h3>Editar Certidão</h3>
        <div class="row">
            <form action="{{route('admin.certidoes.atualizar', $item->id_certidao)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">      <!-- Esse input não é visível para o usuário -- Serve para tratar o formulário post para que ele possa fazer o put, que ´e atualizar -->
                @include('admin.certidoes.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
