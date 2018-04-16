@extends('layout.layout')

@section('content')
    <br>
    <a href="/lsapp/public/posts" class="btn btn-lg btn-primary">Go Back!</a>
    <br>
    <h1>{{$view->title}}</h1>
    <img style="width:80%" src="/lsapp/public/storage/cover_images/{{$view->cover_image}}"><br>
    <div>
        <br>
        {!!$view->body!!}
    </div>
    <hr>    
    <small>Written on {{$view->created_at}} by {{$view->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $view->user_id)
        <a href="/lsapp/public/posts/{{$view->id}}/edit" class="btn btn-default">Edit Post</a>    
        {!! Form::open(['action' => ['PostsController@destroy', $view->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}    
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
        @endif
    @endif
@endsection