@extends('template')

@section('content')
    <h1>Criação de Post</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Atenção!</strong> {{ $error }}.
            </div>
        @endforeach
    @endif






    {!! Form::open(['route'=>'admin.posts.store','method'=>'post']) !!}

    @include('admin.posts.__form')

    <div class="form-group">
        {!! Form::submit('Adicionar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop