@extends('layouts.app')

@section('title', 'Editando Item')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{route('item.update', $item->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

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
