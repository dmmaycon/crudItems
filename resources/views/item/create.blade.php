@extends('layouts.app')

@section('title', 'Novo Item')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{route('item.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                @include('item.form')
            </form>
            <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-outline-primary btn-sm" href="{{route('item.index')}}">
                    <i class="fa fa-angle-left"> Voltar</i>
                </a>
            </div>
        </div>
    </div>
@endsection
