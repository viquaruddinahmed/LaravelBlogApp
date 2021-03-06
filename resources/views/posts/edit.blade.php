@extends('layout.layout')

@section('content')
    <h1>Edit Posts</h1>
    {!! Form::open(['action' => ['PostsController@update', $view->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$view->title,['class' => 'form-control', 'placeholder' => 'Title'])}}

    </div>   
    <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$view->body,['id' => 'my-editor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>   
    {{Form::hidden('_method', 'PUT')}}    
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
  
@endsection