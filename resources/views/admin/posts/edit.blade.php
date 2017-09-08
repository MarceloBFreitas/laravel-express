@extends('template')

@section('content')
    <h1>Edição de Post : {{$post->title}}</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Atenção!</strong> {{ $error }}.
            </div>
        @endforeach
    @endif




    {!! Form::model($post, ['route'=>['admin.posts.update',$post->id],'method'=>'put']) !!}

    @include('admin.posts.__form')

    <div class="form-group">
        {!! Form::label('tags','Tags:',['class'=>'control-label']) !!}
        {!! Form::text('tags',$post->TagList,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Atualizar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop