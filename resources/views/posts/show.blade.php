@extends('layouts.app')

@section('content')
    <h1 class="text-1xl tracking-tight font-extrabold text-gray-900 sm:text-4xl md:text-3xl pl-6">{{$post->title}}</h1>
    <hr>
    {{-- <h3 class="ml-4">{{$post->title}}</h3> --}}
    <div class="relative">
        <p class="mt-4 pl-6 text-sm text-gray-900">{!!$post->body!!}</p>
        {{-- <p class="mt-1 pl-6 text-sm text-gray-500">Updated on: {{$post->updated_at}}</p> --}}
    </div>
    <hr>
    <p class="mt-4 pl-6 text-sm text-gray-500">Written on: {{$post->created_at}}</p>
@endsection
