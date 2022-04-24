@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    {{-- <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"> --}}
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user}}</small>
    <hr>
    {{-- @if(!Auth::guest()) --}}
        {{-- @if(Auth::user()->id == $post->user_id) --}}
            <a href="/posts/{{$post->id}}/edit" class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-sm md:px-5">Edit</a>

            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-sm md:px-5'])}}
            {!!Form::close()!!}
        {{-- @endif --}}
    {{-- @endif --}}
@endsection
