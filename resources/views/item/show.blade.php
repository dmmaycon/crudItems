@extends('layouts.app')

@section('title', 'Detalhe do Item')

@section('content')
    <div class="card text-center" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('storage/' . Str::after($item->image, 'public/')) }}" alt="Image Item">
            <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <p class="card-text">
               Quantidade: {{$item->quantity}}
            </p>
            <p class="card-text">
                {{$item->description}}
            </p>
        </div>
        <a class="btn btn-outline-primary btn-sm" href="{{route('item.index')}}">
            <i class="fa fa-angle-left"> Voltar</i>
        </a>
    </div>
@endsection
