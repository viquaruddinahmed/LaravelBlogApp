@extends('layout.layout')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0 )
        @foreach($posts as $value)
            <div class="card card-body bg-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/lsapp/public/storage/cover_images/{{$value->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                            <h3><a href="/lsapp/public/posts/{{$value->id}}">{{$value->title}}</a></h3>
                            <small>Written on {{$value->created_at}} by {{$value->user->name}}</small>             
                    </div>    
                </div>    
           
            </div><br>
        @endforeach
        {{$posts->links()}}
    @else
        <h3> No Posts Found </h3>

    @endif
    
@endsection