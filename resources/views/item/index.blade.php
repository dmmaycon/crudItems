@extends('layouts.app')

@section('title', 'Listagem de Itens')

@section('content')
    <button class="btn btn-outline-success btn-lg">
        <i class="fa fa-plus-square"> Novo Item</i>
    </button>
    <table class="table table-bordered">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>#</th>
        </thead>
        <tbody>

            <tr>
                <th>1</th>
                <th>Teste</th>
                <th>13</th>
                <th>
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="fa fa-eye" title="Visualizar"></i>
                    </button>
                    <button class="btn btn-outline-success btn-sm">
                        <i class="fa fa-edit" title="Editar"></i>
                    </button>
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="fa fa-trash" title="Excluir"></i>
                    </button>
                </th>
            </tr>
        </tbody>
    </table>

@endsection
