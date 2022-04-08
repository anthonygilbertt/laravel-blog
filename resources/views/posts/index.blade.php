@extends('layouts.app')

@section('content')
    <h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">Posts</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            {{-- <h3 class="ml-4">{{$post->title}}</h3> --}}
            <div class="relative">
                <h3 class="ml-4"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small class="mt-4 text-sm text-gray-500">Written on {{$post->created_at}}</small>
            </div>


        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection
