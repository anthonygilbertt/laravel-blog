@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">{{$title}}</h2>
    <p>¯\_(ツ)_/¯</p>
    @if(count($services) > 1)
        <ul>
            @foreach($services as $service)
                <li>{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
