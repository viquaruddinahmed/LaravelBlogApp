@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <a href="/lsapp/public/posts/create" class="btn  btn-lg btn-primary">Create Post</a><br>
                    <h3>Your Blog Post</h3>
                    @if(count($posts) > 0)
                    <table class="table table-strpped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>  
                        
                        @foreach($posts as $post)
                        <tr>
                        <th>{{$post->title}}</th>
                        <th><a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                        <th>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}    
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}
                        </th>
                        </tr>   
                        @endforeach
                    </table> 
                    @else
                        <h3>You Have No Posts</h3>
                    @endif   
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
