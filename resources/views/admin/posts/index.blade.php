@extends('template')

@section('content')
    <h1>Olá Admin</h1>

    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Novo Post</a>
    <br>
    <hr>
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
            <td>
                <a href="{{route('admin.posts.edit',['id'=>$post->id])}}" class="btn btn-default">Editar</a>
                <a href="{{route('admin.posts.destroy',['id'=>$post->id])}}" class="btn btn-danger">Excluir</a>

            </td>
        </tr>
        @endforeach
    </table>
    {!!  $posts->render()  !!}
    @stop