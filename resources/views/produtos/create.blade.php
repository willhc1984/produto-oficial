@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <div class="mb-1 space-between-elements">
            <h2 class="mt-3">Cadastrar produto</h2>
            <ol class="breadcrumb mb-3 mt-3">
                <li class="breadcrumb-item"><a href="/dashboard">Início</a></li>
                <li class="breadcrumb-item"><a href="{{ route('produto.index') }}">Produtos</a></li>
                <li class="breadcrumb-item active">Cadastrar produto</li>
            </ol>
        </div>

        <div class="card mb-4 border-light shadow">
            <div class="card-header space-between-elements">
                <span>Cadastar produto</span>
            </div>

            <div class="card-body">

                <x-alert />

                <form class="row g-3" action="{{ route('produto.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="col-12">
                        <label for="titulo" class="form-label">Título do produto:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}"
                            placeholder="Título do produto">
                    </div>
                    <div class="col-12">
                        <label for="descricao" class="form-label">Descrição do produto:</label>
                        <textarea class="form-control" aria-label="With textarea" name="descricao" id="descricao" value="{{ old('descricao') }}"
                        placeholder="Descrição do produto"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="link" class="form-label">Link do produto:</label>
                        <input type="text" class="form-control" name="link" id="link" value="{{ old('link') }}"
                            placeholder="Link do produto">
                    </div>
                    <div class="col-12">
                        <label for="imagem" class="form-label">Imagem do produto:</label>
                        <input type="file" class="form-control" name="imagem" id="imagem" value="{{ old('imagem') }}"
                            placeholder="Imagem do produto">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary bt-sm">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
@endsection
