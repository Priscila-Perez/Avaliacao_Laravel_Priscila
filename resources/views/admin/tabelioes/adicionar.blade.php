@extends('layout.site')

@section('titulo', 'Adicionar Tabelião')


@section('conteudo')
    <div class="container">
        <h3>Adicionar Tabelião</h3>
        <div class="row">
            <form action="{{ route('admin.tabelioes.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('admin.tabelioes.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
