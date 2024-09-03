@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <div class="mb1 space-between-elements">
            <h2 class="mt-3">Produtos</h2>
            <ol class="breadcrumb mb-3 mt-3 p-1 rounded bg-light">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="/">Início</a></li>
                <li class="breadcrumb-item active">Produtos</li>
            </ol>
        </div>

        <div class="card mb-4 border-light shadow">
            <div class="card-header space-between-elements">
                <span>Listar</span>
                <span>
                    <a href="{{ route('produto.create') }}" class="btn btn-success btn-sm">
                        <i class="fa-solid fa-square-plus"></i>Cadastrar</a>
                </span>
            </div>

            <div class="card-body">

                <x-alert />

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produtos as $produto)
                            <tr>
                                <th scope="row">{{ $produto->id }}</th>
                                <td>{{ $produto->titulo }}</td>
                                <td class="d-md-flex justify-content-center">

                                    <a href="{{ route('produto.edit', ['produto' => $produto->id]) }}"
                                        class="btn btn-primary btn-sm me-1 mb-1">
                                        <i class="fa-solid fa-pen-to-square"></i> Editar</a>

                                    <form id="formDelete{{ $produto->id }}" method="POST"
                                        action="{{ route('produto.destroy', ['produto' => $produto->id]) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm me-1 mb-1 btnDelete"
                                            data-delete-id="{{ $produto->id }}"><i class="fa-regular fa-trash-can"></i>
                                            Apagar</button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <div class="alert alert-danger" role="alert">
                                Nenhum produto encontrado!
                            </div>
                        @endforelse
                    </tbody>
                </table>

                {{ $produtos->onEachSide(0)->links() }}

            </div>
        </div>

    </div>
@endsection
