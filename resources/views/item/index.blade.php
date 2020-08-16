@extends('layouts.app')

@section('title', 'Listagem de Itens')

@section('content')
    <a class="btn btn-outline-success btn-lg" href="{{route('item.create')}}">
        <i class="fa fa-plus-square"> Novo Item </i>
    </a>
    <table class="table table-bordered">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </thead>
        <tbody>

            @forelse ($itens as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->name}}</th>
                    <th>{{$item->quantity}}</th>
                    <th>
                        <a class="btn btn-outline-primary btn-sm" href="{{route('item.show', $item->id)}}">
                            <i class="fa fa-eye" title="Visualizar"></i>
                        </a>
                        <a class="btn btn-outline-success btn-sm" href="{{route('item.edit', $item->id)}}">
                            <i class="fa fa-edit" title="Editar"></i>
                        </a>
                        <form style="display: inline" action="{{ route('item.destroy', $item->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button onclick="return confirm(`Deseja realmente excluir o item com código: {{$item->id}} de nome: {{$item->name}}`)" class="btn btn-outline-danger btn-sm" href="{{route('item.destroy', $item->id)}}">
                                <i class="fa fa-trash" title="Excluir"></i>
                            </button>
                        </form>
                    </th>
                </tr>
            @empty
                <tr>
                    <td>Nenhum item cadastrado!</td>
                </tr>
            @endforelse

        </tbody>
    </table>
@endsection

