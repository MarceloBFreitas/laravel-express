@extends('template')

@section('content')
    <h1>Olá Admin</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Action</th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td></td>
        </tr>
        @endforeach
    </table>
    {!!  $posts->render()  !!}
    @stop