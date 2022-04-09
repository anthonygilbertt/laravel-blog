@extends('layouts.app')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            {{-- <h3 class="ml-4">{{$post->title}}</h3> --}}
            <div class="pt-3 pb-3 px-20">
                <h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">Posts</h1>
                <hr>
                <h3 class="ml-4"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small class="mt-4 text-sm text-gray-500">Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        <br>
        {{-- <div class="pt-3 pb-3 px-60" style="border: 1px solid #ddd;"> --}}
        <div class="pt-3 pb-3 px-60">
            {{$posts->links()}}
        </div>
        <br>
    @else
        <p>No posts found</p>
    @endif
@endsection
