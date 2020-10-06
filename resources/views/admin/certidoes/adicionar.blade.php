@extends('layout.site')

@section('titulo', 'Adicionar Certidão')


@section('conteudo')
    <div class="container">
        <h3>Adicionar Certidão</h3>
        <div class="row">
            <form action="{{ route('admin.certidoes.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('admin.certidoes.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
