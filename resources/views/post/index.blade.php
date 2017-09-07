@extends('template')

@section('content')

    <h1>Últimas Notícias</h1>


    @foreach($posts as $post)

        <div class="row">
            <h3>{{  $post->title }}</h3>
            <p>
                {{$post->content  }}
            </p>

            <h4>Comentários</h4>
            @foreach($post->comments as $comment)
                <strong>{{$comment->name}}</strong>
                <span>{{$comment->comment}}</span>
                <br>
                @endforeach
        </div>
        <hr>
    @endforeach


@stop