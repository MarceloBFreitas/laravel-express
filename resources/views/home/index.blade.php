@extends('template')


@section('content')

<h1>Últimas Notícias</h1>


    @foreach($posts as $post)

    <div class="row">
        <p>
            {{$post}}
        </p>

    </div>

    @endforeach

@stop